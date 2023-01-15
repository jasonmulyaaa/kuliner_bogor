<?php

namespace App\Http\Controllers;

use App\Models\Banner;
// use App\Models\Konfigurasi;
use App\Models\Alur;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Product;
use App\Models\PageTitle;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::first();
        // $konfigurasi = Konfigurasi::first();
        $alur = Alur::all();
        $testimonial = Testimonial::all();
        $partner = Partner::all();
        $product = Product::orderBy('view', 'DESC')->get();
        $pagetitle = PageTitle::first();
        $page = 'Kuliner Bogor';
        return view('welcome', compact('banner', 'alur', 'testimonial', 'partner', 'pagetitle', 'product', 'page'));
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
    public function show($id)
    {
        //
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
