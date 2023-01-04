<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = $request->except('_token');
        // $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            if (Auth::user()->email) {
                Toastr::success('User login successfull', '', ["positionClass" => "toast-bottom-right"]);
                return redirect()->route('user');
            }
        } else {
            Toastr::error('Email or password wrong, plase try again', '', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('login');
        }
    }
}
