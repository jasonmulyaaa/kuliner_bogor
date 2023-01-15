<?php

namespace App\Http\Controllers;

use App\Models\Banner;
// use App\Models\Konfigurasi;
use App\Models\Product;
use App\Models\Category;
use App\Models\PageTitle;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $categoryproduct = Category::where('slug', $slug)->first();
        $product = Product::where('category', $categoryproduct->id)->get();
        $topproduct = Product::orderBy('view', 'DESC')->first();
        $categoryresto = Category::all();
        // $konfigurasi = Konfigurasi::first();
        $pagetitle = PageTitle::first();
        $page = $pagetitle->page_resto;
        return view('user.restoran.categoryrestoran.index', compact('product', 'pagetitle', 'topproduct', 'categoryproduct', 'categoryresto', 'page'));
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
