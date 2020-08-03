<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 7/30/20
 */

use Illuminate\Support\Facades\Route;

Route::get('/admin-login', function () {
    return 'admin-login';
});

Route::get('/admin/home', 'Admin\AdminController@home');

Route::get('/admin/cate/list', 'Admin\AdminController@getListCate');

Route::get('/admin/product/list', 'Admin\AdminController@getListProduct');

Route::get('/admin/order/list', 'Admin\AdminController@getListOrder');

Route::get('/admin/order/detail/{id}', 'Admin\AdminController@getOrderDetail');
