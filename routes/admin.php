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

Route::get('/admin/cate/list', 'Admin\AdminController@getListCate')
    ->name('cate.list');

Route::get('/admin/cate/add', 'Admin\AdminController@getAddCate')
    ->name('cate.add');

Route::post('/admin/cate/add', 'Admin\AdminController@postAddCate');

Route::get('/admin/cate/edit/{id}', 'Admin\AdminController@getEditCate')
    ->name('cate.edit');

Route::post('/admin/cate/edit', 'Admin\AdminController@postEditCate');

Route::get('/admin/cate/delete/{id}', 'Admin\AdminController@getDeleteCate');

Route::get('/admin/product/list', 'Admin\AdminController@getListProduct')
    ->name('product.list');

Route::get('/admin/product/add', 'Admin\AdminController@getAddProduct')
    ->name('product.add');

Route::post('/admin/product/add', 'Admin\AdminController@postAddProduct');

Route::get('/admin/product/delete/{id}', 'Admin\AdminController@getDeleteProduct')
    ->name('product.delete');

Route::get('/admin/order/list', 'Admin\AdminController@getListOrder')
    ->name('order.list');

Route::get('/admin/order/detail/{id}', 'Admin\AdminController@getOrderDetail');
