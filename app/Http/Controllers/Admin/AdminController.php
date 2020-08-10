<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.layout_admin_master');
    }

    public function getListCate()
    {
        $categories = Category::where('status', '=', 1)
            ->orderby('id', 'desc')
            ->paginate(5);
        return view('admin.list_cate')->with('categories', $categories);
    }

    public function getAddCate()
    {
        return view('admin.add_cate');
    }

    public function postAddCate(Request $request)
    {
        $category = new Category();
        $name = $request->get('name');
        $category->name = $name;
        $category->status = 1;
        $category->save();

        // msg success
        return redirect('/admin/cate/list');
    }

    public function getEditCate($id)
    {
        $category = Category::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        return view('admin.edit_cate')->with('category', $category);
    }

    public function postEditCate(Request $request)
    {
        $id = $request->get('id');
        $category = Category::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $name = $request->get('name');
        $category->name = $name;
        $category->save();

        // msg success
        return redirect('/admin/cate/list');
    }

    public function getDeleteCate($id)
    {
        $category = Category::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $category->status = -1;
        $category->save();
        return redirect('/admin/cate/list');
    }

    public function getListProduct()
    {
        $products = Product::where('status', '=', 1)
            ->orderby('id', 'desc')
            ->paginate(20);
        return view('admin.list_product')->with('products', $products);
    }

    public function getAddProduct()
    {
        $listCate = Category::where('status', '=', 1)->get();
        return view('admin.add_product')->with('listCate', $listCate);
    }

    public function postAddProduct(Request $request)
    {
        $product = new Product();
        $name = $request->get('name');
        $price = $request->get('price');
        $description = $request->get('description');
        $thumbnails = $request->get('thumbnails');
        $cateId = $request->get('cateId');
        $product->categoryId = $cateId;
        $product->name = $name;
        $product->price = $price;
        foreach ($thumbnails as $thumbnail) {
            $product->thumbnail .= $thumbnail . ',';
        }
        $product->description = $description;
        $product->size = 1;
        $product->color = 1;
        $product->dimension = 1;
        $product->status = 1;
        $product->save();

        // msg success
        return redirect('/admin/product/list');
    }

    public function getDetailProduct($id)
    {
        $product = Product::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $listCate = Category::where('status', '=', 1)->get();
        return view('admin.detail_product', compact('listCate', 'product'));
    }

    public function getEditProduct($id)
    {
        $product = Product::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $listCate = Category::where('status', '=', 1)->get();
        return view('admin.edit_product', compact('listCate', 'product'));
    }

    public function postEditProduct(Request $request)
    {
        $id = $request->get('id');
        $product = Product::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $name = $request->get('name');
        $price = $request->get('price');
        $description = $request->get('description');
//        $thumbnails = $request->get('thumbnails');
        $cateId = $request->get('cateId');
        $product->categoryId = $cateId;
        $product->name = $name;
        $product->price = $price;
//        foreach ($thumbnails as $thumbnail) {
//            $product->thumbnail .= $thumbnail . ',';
//        }
        $product->description = $description;
        $product->save();

        // msg success
        return redirect('/admin/product/list');
    }

    public function getDeleteProduct($id)
    {
        $product = Product::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $product->status = -1;
        $product->save();
        return redirect('/admin/product/list');
    }

    public function getListOrder()
    {
        $orders = Order::where('od_status', '=', 1)
            ->paginate(10);
        return view('admin.list_order', compact())->with('orders', $orders);
    }
}
