<?php



// Route::get('/', function () {
//     return view('layoutsadmin');
// });
Route::post('/cart','Api\Home\CartController@addCart')->name('cart.addCart');
Route::get('/carts','Api\Home\CartController@showCart')->name('carts.showCart');
