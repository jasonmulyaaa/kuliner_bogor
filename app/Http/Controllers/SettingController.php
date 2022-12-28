<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view('admin.setting.index', compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password',
        ]);

        if ($request['password'] == "") {
            $request['password'] = $request['oldPass'];
        }
        else{
            $request['password'] = bcrypt($request['password']);
        }

        $user = User::find($id);

        $user->update($request->all());

        return redirect()->route('setting.index')
            ->with('success', 'Update Success!');
    }
}
