<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function login()
    {
        return view('frontend.login');
    }
}
