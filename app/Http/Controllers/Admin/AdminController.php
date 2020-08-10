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

    public function getListProduct(Request $request)
    {
        $data = array();
        $data['category_id'] = 0;
        $data['keyword'] = '';
        $categories = Category::where('status', '=', 1)->get();
        $product_list = Product::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $product_list = $product_list->where('category_id', '=', $request->get('category_id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $product_list = $product_list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $product_list = $product_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $product_list->where('status', '=', 1)
            ->orderby('id', 'desc')
            ->paginate(15);
        $data['categories'] = $categories;
        return view('admin.list_product')->with($data);
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
        $product->category_id = $cateId;
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
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->category_id = $request->get('cateId');
        $product->thumbnail = '';

        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $product->thumbnail .= $thumbnail . ',';
        }
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

    public function getListOrder(Request $request)
    {
        $data = array();
        $data['status'] = 0;
        $data['keyword'] = '';
//        $categories = Category::where('status', '=', 1)->get();
        $order_list = Order::query();
        if ($request->has('status') && $request->get('status') != 0) {
            $data['status'] = $request->get('status');
            $order_list = $order_list->where('od_status', '=', $request->get('status'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $order_list = $order_list->where('od_code', 'like', '%' . $request->get('keyword') . '%')
                ->orWhere('ship_name', 'like', '%' . $request->get('keyword') . '%')
                ->orWhere('ship_phone', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $order_list = $order_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $order_list->whereNotIn('od_status', [-1])
            ->orderby('created_at', 'desc')
            ->paginate(10);
        return view('admin.list_order')->with($data);

//        $orders = Order::whereNotIn('od_status', [-1])
//            ->orderby('created_at', 'desc')
//            ->paginate(10);
//        return view('admin.list_order', compact('orders'));
    }

    public function getDetailOrder($id)
    {
        $product = Product::where('id', '=', $id)
            ->where('status', '=', 1)
            ->first();
        $listCate = Category::where('status', '=', 1)->get();
        return view('admin.edit_product', compact('listCate', 'product'));

        $orders = Order::where('id', '=', $id)
            ->orderby('created_at', 'desc')
            ->paginate(10);
        return view('admin.list_order', compact())->with('orders', $orders);
    }
}
