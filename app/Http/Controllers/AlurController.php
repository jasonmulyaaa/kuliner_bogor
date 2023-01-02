<?php

namespace App\Http\Controllers;

use App\Models\Alur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alur = Alur::latest()->get();

        return view('admin.alur.index', compact('alur'));
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
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $image = $request->file('gambar')->store('post-images/alur');

        $validated['gambar'] = $image;

        Alur::create($validated);

        return redirect()->route('alur.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function show(Alur $alur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alur = Alur::find($id);

        return view('admin.alur.edit', compact('alur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'gambar' => 'image|file',
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['gambar'] = $request->file('gambar')->store('post-images/alur');
        };

        $alur = Alur::find($id);

        $alur->update($validated);

        return redirect()->route('alur.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alur = Alur::find($id);

        if ($alur->gambar) {
            Storage::delete($alur->gambar);
        }

        $alur->delete();

        return redirect()->route('alur.index')
            ->with('success', 'Delete Success!');
    }
}
