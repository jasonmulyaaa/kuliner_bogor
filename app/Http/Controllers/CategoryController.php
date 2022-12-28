<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $category = Category::latest()->get();
        return view('admin.category.index', compact('category'));
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
            'category' => 'required',
        ]);

        $validated['slug'] = Str::slug($request->category);

        Category::create($validated);

        return redirect()->route('category.index')
            ->with('success', 'Add Success!');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'category' => 'required',
        ];

        $validated = $request->validate($rules);

        $validated['slug'] = Str::slug($request->category);

        $category->update($validated);

        return redirect()->route('category.index')
            ->with('success', 'Update Success!');
    }

    public function destroy(Category $category)
    {
        $category->delete($category->id);

        return redirect()->route('category.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedCategory(Request $request)
    {
        $ids = $request->ids;
        Category::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
