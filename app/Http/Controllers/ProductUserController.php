<?php

namespace App\Http\Controllers;

use App\Models\Banner;
// use App\Models\Konfigurasi;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\PageTitle;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(9);
        $categoryresto = Category::all();
        $topproduct = Product::orderBy('view', 'DESC')->first();
        // $konfigurasi = Konfigurasi::first();
        $pagetitle = PageTitle::first();
        $page = $pagetitle->page_resto;

        return view('user.restoran.index', compact('product', 'pagetitle', 'topproduct', 'categoryresto', 'page'));
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
        // $konfigurasi = Konfigurasi::first();
        $product->view += 1;
        $product->update();
        $pagetitle = PageTitle::first();
        $testimonial = Testimonial::all();
        $page = $product->title;

        return view('user.restoran.show', compact('product', 'pagetitle', 'page', 'testimonial'));
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
