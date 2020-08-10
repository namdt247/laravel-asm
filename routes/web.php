<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\HomeController@home');

Route::get('/login', 'Frontend\HomeController@login');

Route::get('/product', 'Frontend\HomeController@product');

Route::get('/product/{type}', 'Frontend\HomeController@getProduct');

Route::get('/product/detail/{id}', 'Frontend\HomeController@getProductDetail');

Route::get('/about', 'Frontend\HomeController@getAbout')
    ->name('frontend.about');

Route::get('/faq', 'Frontend\HomeController@getFaq')
    ->name('frontend.faq');

Route::get('/introduce', 'Frontend\HomeController@getIntroduce')
    ->name('frontend.introduce');

Route::get('/contact', 'Frontend\HomeController@getContact')
    ->name('frontend.contact');

Route::get('/categories/{id}','Frontend\HomeController@getProductByCate')
    ->name('frontend.productByCate');

Route::get('/categories/search','Frontend\HomeController@getSearchProduct')
    ->name('frontend.productSearch');

Route::get('/products/{prdId}', 'Frontend\HomeController@getDetailProduct')
    ->name('frontend.detailProduct');

Route::get('/categories','Frontend\HomeController@categories');

// Route::get('/quest', 'Frontend\HomeController@getContact')
//     ->name('frontend.contact');

// Route::get('/detail', 'Frontend\HomeController@detail');

// Route::get('/shopping', 'Frontend\HomeController@shoppingCart')
//     ->name('frontend.shopping_cart');

// Route::get('/categories', 'Frontend\HomeController@getQuest');

Route::get('/contact','Frontend\HomeController@contact')
    ->name('frontend.contact');
