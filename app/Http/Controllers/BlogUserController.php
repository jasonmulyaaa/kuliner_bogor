<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Config;
use App\Models\Blog;
use App\Models\PageTitle;
use Illuminate\Http\Request;

class BlogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(9);
        $konfigurasi = Config::first();
        // $alur = Alur::all();
        // $testimonial = Testimonial::all();
        // $partner = Partner::all();
        $pagetitle = PageTitle::first();
        $page = $pagetitle->page_blog;

        return view('user.blogs.index', compact('blogs', 'pagetitle', 'page', 'konfigurasi'));
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
        $blog = Blog::where('slug', $slug)->first();
        $blog->view += 1;
        $blog->update();
        $konfigurasi = Konfigurasi::first();
        $pagetitle = PageTitle::first();
        $page = $blog->title;

        return view('user.blogs.show', compact('blog', 'pagetitle', 'page', 'konfigurasi'));
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
