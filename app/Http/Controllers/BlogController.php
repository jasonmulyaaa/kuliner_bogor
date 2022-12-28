<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blog $blog)
    {
        $blog = Blog::latest()->get();

        return view('admin.blog.index', compact('blog'));
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
            'image' => 'image|file|required',
            'title' => 'required',
            'desc' => 'required',
            'keyword' => 'required',
            'tag' => 'required',
        ]);

        $image = $request->file('image')->store('post-images/blog');

        $validated['image'] = $image;

        $validated['slug'] = Str::slug($request->title);

        $validated['auth'] = Auth::user()->username;

        $validated['date'] = date('Y-m-d');

        $validated['view'] = 0;

        Blog::create($validated);

        return redirect()->route('blog.index')
            ->with('success', 'Add Success!');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'image' => 'image|file',
            'title' => 'required',
            'desc' => 'required',
            'keyword' => 'required',
            'tag' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/blog');
        };

        $validated['slug'] = Str::slug($request->title);

        $blog = Blog::find($id);

        $blog->update($validated);

        return redirect()->route('blog.index')
            ->with('success', 'Update Success!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        $blog->delete($blog->id);

        return redirect()->route('blog.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedBlog(Request $request)
    {
        $ids = $request->ids;
        Blog::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
