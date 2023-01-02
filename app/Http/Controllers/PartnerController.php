<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::latest()->get();

        return view('admin.partner.index', compact('partner'));
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
        $validated = $request->validate([
            'gambar' => 'image|file|required',
            'nama' => 'required',
            'link' => 'required',
        ]);

        $image = $request->file('gambar')->store('post-images/partner');

        $validated['gambar'] = $image;

        Partner::create($validated);

        return redirect()->route('partner.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'gambar' => 'image|file',
            'nama' => 'required',
            'link' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['gambar'] = $request->file('gambar')->store('post-images/alur');
        };

        $partner = Partner::find($id);

        $partner->update($validated);

        return redirect()->route('partner.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);

        if ($partner->gambar) {
            Storage::delete($partner->gambar);
        }

        $partner->delete();

        return redirect()->route('partner.index')
            ->with('success', 'Delete Success!');
    }
}
