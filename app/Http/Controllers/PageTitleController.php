<?php

namespace App\Http\Controllers;

use App\Models\PageTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle = PageTitle::first();

        return view('admin.pagetitle.index', compact('pagetitle'));
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
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function show(PageTitle $pageTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(PageTitle $pageTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageTitle $pagetitle)
    {
        $rules = [
            'judul_alur' => 'required',
            'deskripsi_alur' => 'required',
            'judul_resto' => 'required',
            'deskripsi_resto' => 'required',
            'gambar_resto' => 'image|file|',
            'judul_counter' => 'required',
            'gambar_testimonial' => 'image|file|',
            'judul_testimonial' => 'required',
            'judul_partner' => 'required',
            'judul_subscribe' => 'required',
            'gambar_subscribe' => 'image|file|',
            'judul_blog' => 'required',
            'deskripsi_blog' => 'required',
            'gambar_blog' => 'image|file',
            'judul_contact' => 'required',
            'deskripsi_contact' => 'required',
            'alamat_contact' => 'required',
            'email_contact' => 'required',
            'telp_contact' => 'required',
            'gambar_contact' => 'image|file',
            'page_blog' => 'required',
            'page_resto' => 'required',
            'page_contact' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('gambar_resto')) {
            if ($request->oldResto) {
                Storage::delete($request->oldResto);
            }
            $validated['gambar_resto'] = $request->file('gambar_resto')->store('post-images/config');
        };

        if ($request->file('gambar_testimonial')) {
            if ($request->oldTestimonial) {
                Storage::delete($request->oldTestimonial);
            }
            $validated['gambar_testimonial'] = $request->file('gambar_testimonial')->store('post-images/config');
        };

        if ($request->file('gambar_subscribe')) {
            if ($request->oldSubscribe) {
                Storage::delete($request->oldSubscribe);
            }
            $validated['gambar_subscribe'] = $request->file('gambar_subscribe')->store('post-images/config');
        };

        if ($request->file('gambar_blog')) {
            if ($request->oldBlog) {
                Storage::delete($request->oldBlog);
            }
            $validated['gambar_blog'] = $request->file('gambar_blog')->store('post-images/config');
        };

        if ($request->file('gambar_contact')) {
            if ($request->oldContact) {
                Storage::delete($request->oldContact);
            }
            $validated['gambar_contact'] = $request->file('gambar_contact')->store('post-images/config');
        };

        $pagetitle->update($validated);

        return redirect()->route('pagetitle.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageTitle $pageTitle)
    {
        //
    }
}
