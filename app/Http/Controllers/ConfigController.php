<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Config $config)
    {
        $config = Config::orderBy('id', 'ASC')->first();
        return view('admin.config.index', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $rules = [
            'title' => 'required',
            'favicon',
            'nav_img' => 'image|file',
            'footer_img' => 'image|file',
            'footer_desc' => 'required',
            'meta_title' => 'required',
            'meta_search' => 'required',
            'meta_keyword' => 'required',
            'meta_web' => 'required',
            'meta_auth' => 'required',
            'meta_desc' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('favicon')) {
            if ($request->oldFavicon) {
                Storage::delete($request->oldFavicon);
            }
            $validated['favicon'] = $request->file('favicon')->store('post-images/config');
        };

        if ($request->file('nav_img')) {
            if ($request->oldNavImg) {
                Storage::delete($request->oldNavImg);
            }
            $validated['nav_img'] = $request->file('nav_img')->store('post-images/config');
        };

        if ($request->file('footer_img')) {
            if ($request->oldFooterImg) {
                Storage::delete($request->oldFooterImg);
            }
            $validated['footer_img'] = $request->file('footer_img')->store('post-images/config');
        };

        $config->update($validated);

        return redirect()->route('config.index')
            ->with('success', 'Update Success!');
    }
}
