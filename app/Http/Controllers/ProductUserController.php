<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Config;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Menu;
use App\Models\PageTitle;
use App\Models\Rating;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::latest()->paginate(9);

        $product = Product::when($request->search, function ($query) use ($request) {
            $query->where('title', 'like', "%{$request->search}%");
        })->orderBy('created_at', 'desc')->paginate(9);

        $product->appends($request->only('search'));

        $categoryresto = Category::all();
        $topproduct = Product::orderBy('view', 'DESC')->first();
        $konfigurasi = Config::first();
        $pagetitle = PageTitle::first();
        $page = $pagetitle->page_resto;

        return view('user.restoran.index', compact('product', 'pagetitle', 'topproduct', 'categoryresto', 'page', 'konfigurasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        // $categoryresto = Category::all();
        // $topproduct = Product::orderBy('view', 'DESC')->first();
        $konfigurasi = Config::first();
        $product->view += 1;
        $product->update();
        $pagetitle = PageTitle::first();
        $rating = Rating::where('resto_id', $product->id)->get();
        $testimonial = Testimonial::all();
        $menu = Menu::where('resto_id', $product->id)->get();
        $page = $product->title;

        return view('user.restoran.show', compact('product', 'pagetitle', 'page', 'testimonial', 'rating', 'konfigurasi', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
