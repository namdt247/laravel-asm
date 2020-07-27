<?php


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

class HomeAdminController extends Controller
{
    public function home_admin()
    {
        return view('frontend.admin.home_admin');
    }
}