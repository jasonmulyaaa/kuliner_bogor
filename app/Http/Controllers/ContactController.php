<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::orderBy('id', 'ASC')->first();

        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $rules = [
            'alamat' => 'required',
            'email' => 'required',
            'embed' => 'required',
            'wa' => 'required',
            'twit',
            'fb',
            'ig',
        ];

        $validated = $request->validate($rules);

        $validated['twit'] = $request->twit;
        $validated['fb'] = $request->fb;
        $validated['ig'] = $request->ig;

        $contact->update($validated);

        return redirect()->route('contact.index')
            ->with('success', 'Update Success!');
    }
}
