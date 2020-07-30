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

