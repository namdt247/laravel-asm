<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about_us');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function login()
    {
        return view('frontend.login');
    }
    public function introduce()
    {
        return view('frontend.introduce');
    }

    public function categories()
    {
        return view('frontend.categories');
    }

    public function detail()
    {
        return view('frontend.detail');
    }

    public function product()
    {
        return view('frontend.categories');
    }
}
