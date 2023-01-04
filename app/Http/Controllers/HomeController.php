<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function homeIndex()
    {
        return view('Home');
    }
}
