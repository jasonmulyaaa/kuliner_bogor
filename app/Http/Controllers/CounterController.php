<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Counter $counter)
    {
        $counter = Counter::latest()->get();
        return view('admin.counter.index', compact('counter'));
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
            'title' => 'required',
            'number' => 'required',
        ]);

        $image = $request->file('image')->store('post-images/counter');

        $validated['image'] = $image;

        Counter::create($validated);

        return redirect()->route('counter.index')
            ->with('success', 'Add Success!');
    }

    public function edit(Counter $counter)
    {
        return view('admin.counter.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $counter)
    {
        $rules = [
            'title' => 'required',
            'number' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/counter');
        };

        $counter->update($validated);

        return redirect()->route('counter.index')
            ->with('success', 'Update Success!');
    }

    public function destroy(Counter $counter)
    {
        if ($counter->image) {
            Storage::delete($counter->image);
        }

        $counter->delete($counter->id);

        return redirect()->route('counter.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedCounter(Request $request)
    {
        $ids = $request->ids;
        Counter::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
