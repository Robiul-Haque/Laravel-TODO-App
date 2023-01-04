<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function sign_upIndex()
    {
        return view('auth.sign-up');
    }

    public function sign_up(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required|min:11',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20'
        ]);

        $signUp_data = [
            'name' => $request->input('name'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ];

        User::create($signUp_data);

        Toastr::success('User create successfull', '', ["positionClass" => "toast-bottom-right"]);
        
        return redirect()->route('login');
    }
}
