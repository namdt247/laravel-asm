<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use GuzzleHttp\Psr7\Request;
use function Sodium\compare;

class HomeController extends Controller
{
    public function home()
    {
        $product1 = Product::where('category_id', '=', 1)
            ->where('status', '=', 1)
            ->orderby('created_at', 'desc')
            ->get();
        $product2 = Product::where('category_id', '=', 2)
            ->where('status', '=', 1)
            ->orderby('created_at', 'desc')
            ->get();
        $product3 = Product::where('category_id', '=', 3)
            ->where('status', '=', 1)
            ->orderby('created_at', 'desc')
            ->get();
        return view('frontend.home')->with('product1', $product1)
            ->with('product2', $product2)
            ->with('product3', $product3);
    }

    public function getAbout()
    {
        return view('frontend.about_us');
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

    public function getProductByCate($id)
    {
        $product = Product::where('category_id', '=', $id)
            ->where('status', '=', 1)
            ->orderby('created_at', 'desc')
            ->paginate(12);
        return view('frontend.categories', compact('product'));
    }

    public function getDetailProduct($prdId)
    {

        $prd = Product::where('id', '=', $prdId)->first();
        $list_product = Product::where('category_id', '=', 1)
            ->where('status', '=', 1)->get();
        return view('frontend.detail')->with('prd', $prd)->with('list_product', $list_product);
    }

    public function getSearchProduct(Request $request)
    {
        $data = array();
        $data['keyword'] = '';
        $product = Product::query();
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $product = $product->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $data['product'] = $product->where('status', '=', 1)
            ->orderby('created_at', 'desc')
            ->paginate(12);
        dd($data['product']);
        return view('frontend.categories')->with($data);
    }
}
