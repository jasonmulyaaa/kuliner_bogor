<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $product = Product::latest()->get();
        $category = Category::latest()->get();

        return view('admin.product.index', compact('product', 'category'));
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
            'quotes' => 'required',
            'desc' => 'required',
            'short_desc' => 'required',
            'benefit' => 'required',
            'category' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'rating' => 'required',
            'harga' => 'required',
            'jam' => 'required',
        ]);

        $image = $request->file('image')->store('post-images/product');

        $validated['image'] = $image;

        $validated['slug'] = Str::slug($request->title);

        $validated['view'] = 0;

        Product::create($validated);

        return redirect()->route('product.index')
            ->with('success', 'Add Success!');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        $category = Category::latest()->get();

        return view('admin.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'image' => 'image|file',
            'title' => 'required',
            'quotes' => 'required',
            'desc' => 'required',
            'short_desc' => 'required',
            'benefit' => 'required',
            'category' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'rating' => 'required',
            'harga' => 'required',
            'jam' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/product');
        };

        $validated['slug'] = Str::slug($request->title);

        $product = Product::find($id);

        $product->update($validated);

        return redirect()->route('product.index')
            ->with('success', 'Update Success!');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }

        $product->delete($product->id);

        return redirect()->route('product.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedProduct(Request $request)
    {
        $ids = $request->ids;
        Product::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
