<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function userIndex()
    {
        return view('Users');
    }
}
