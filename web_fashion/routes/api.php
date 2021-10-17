<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin
Route::get('homes','Api\Admin\AdminController@home')->name('homes.home');
Route::get('admin','Api\Admin\AdminController@login')->name('admin.login');
Route::post('admins','Api\Admin\AdminController@check')->name('admins.check');
Route::get('adminss','Api\Admin\AdminController@logout')->name('adminss.logout');

Route::resource('customer','Api\Admin\CustomerController');
Route::resource('product-type','Api\Admin\product_TypeController');
Route::resource('product-size','Api\Admin\product_SizeController');
Route::resource('product-brand','Api\Admin\product_BrandController');
Route::resource('product-sale','Api\Admin\product_SaleController');
Route::resource('product','Api\Admin\ProductController');

//Home
Route::get('home','Api\Home\HomeController@home')->name('home.home');




