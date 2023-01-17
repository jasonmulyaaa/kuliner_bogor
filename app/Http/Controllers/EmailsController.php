<?php

namespace App\Http\Controllers;

use App\Models\Emails;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
        ]);

        $check = Emails::where('email', $validated['email'])->count();
        if ($check) {
            return back()->with('success', 'You Already Subcribe!');
        }

        Emails::create($validated);

        return back()->with('success', 'Subcribe Success!');
    }
}
