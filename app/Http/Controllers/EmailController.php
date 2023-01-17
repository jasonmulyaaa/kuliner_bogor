<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Contact;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required',
            // 'g-recaptcha-response' => 'required|captcha'
        ]
        // ,
        // [
        //     'g-recaptcha-response.required' => 'Please verify that you are not a robot.'
        // ]
    );

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
        ];

        $email = Contact::first();

        Mail::to($email->email)->send(new SendMail($data));

        return back()->with('success', 'Send Email Success');
    }
}
