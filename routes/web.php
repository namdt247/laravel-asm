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

//Route::get('/product', 'Frontend\HomeController@product');

//Route::get('/product/{type}', 'Frontend\HomeController@getProduct');

//Route::get('/product/detail/{id}', 'Frontend\HomeController@getProductDetail');

Route::get('/about', 'Frontend\HomeController@about');

Route::get('/contact', 'Frontend\HomeController@contact');

Route::get('/faq', 'Frontend\HomeController@faq');

Route::get('/product/details', 'Frontend\HomeController@detail');
