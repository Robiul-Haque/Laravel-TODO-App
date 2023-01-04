<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();

        Toastr::success('User log-out successfull', '', ["positionClass" => "toast-bottom-right"]);

        return redirect()->route('login');
    }
}
