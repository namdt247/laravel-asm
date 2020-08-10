<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function getAbout()
    {
        return view('frontend.about_us');
    }
    public function getQuest()
    {
        return view('frontend.quest');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function getFaq()
    {
        return view('frontend.faq');
    }

    public function login()
    {
        return view('frontend.login');
    }
    public function getIntroduce()
    {
        return view('frontend.introduce');
    }

    public function getContact()
    {
        return view('frontend.contact');
    }

    public function categories()
    {
        return view('frontend.categories');
    }

    public function detail()
    {
        return view('frontend.detail');
    }

    public function shoppingCart()
    {
        return view('frontend.shoppingCart');
    }
    public function category()
    {
        return view('frontend.categories');
    }
}
