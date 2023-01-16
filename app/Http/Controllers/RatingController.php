<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'resto_id' => 'required',
            'user_id' => 'required',
            'desc' => 'required',
            'rating' => 'required',
        ]);

        Rating::create($validated);

        return redirect()->back()
            ->with('success', 'Add Success!');
    }
    
    public function update(Request $request, $id)
    {
        $rules = [
            'resto_id' => 'required',
            'user_id' => 'required',
            'desc' => 'required',
            'rating' => 'required',
        ];

        $validated = $request->validate($rules);

        $rating = Rating::find($id);

        $rating->update($validated);

        return redirect()->back()
            ->with('success', 'Update Success!');
    }
}
