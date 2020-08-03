<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.layout_admin_master');
    }

    public function getListCate()
    {
        return view('admin.list_cate');
    }

    public function getListProduct()
    {
        return view('admin.list_product');
    }

    public function getListOrder()
    {
        return view('admin.list_order');
    }
}
