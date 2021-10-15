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

Route::get('homes','Api\AdminController@home')->name('homes.home');
Route::get('admin','Api\AdminController@login')->name('admin.login');
Route::post('admins','Api\AdminController@check')->name('admins.check');
Route::get('adminss','Api\AdminController@logout')->name('adminss.logout');


Route::resource('customer','Api\CustomerController');
Route::resource('product-type','Api\product_TypeController');
Route::resource('product-size','Api\product_SizeController');
Route::resource('product-brand','Api\product_BrandController');
Route::resource('product-sale','Api\product_SaleController');
Route::resource('product','Api\ProductController');

