<?php

namespace App\Http\Controllers\Api\Home;

use Session;
session_start();
use App\Models\product_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CartController extends Controller
{
    public function addCart (Request $request){
   
        $data = $request->all();
       
        $session_id = substr(md5(microtime()),rand(0,25),5);
        // $cart = Session::get('cart');
        // if( $cart == true){
        //     $is_val = 0;
        //     foreach($cart as $key => $val){
        //         if( $val['product_id'] == $data['cart_product_id']){
        //             $is_val++;
        //         }      
        //     }
        //     if($is_val == 0){
        //         $cart[] = array(
        //             'session_id' =>$session_id,
        //             'product_id' => $data['cart_product_id'],
        //             'product_name' => $data['cart_product_name'],
        //             'product_image' => $data['cart_product_image'],
        //             'product_count' => $data['cart_product_count'],
        //             'product_price' => $data['cart_product_price']
        //         );
        //         Session::put('cart',$cart);
        //     }
        // }else{
        //     $cart[] = array(
        //         'session_id' =>$session_id,
        //         'product_id' => $data['cart_product_id'],
        //         'product_name' => $data['cart_product_name'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_count' => $data['cart_product_count'],
        //         'product_price' => $data['cart_product_price']
        //     );
        //     Session::put('cart',$cart);
        // } 
        $cart[] = array(
            'session_id' =>$session_id,
            'product_id' => $data['cart_product_id'],
            'product_name' => $data['cart_product_name'],
            'product_image' => $data['cart_product_image'],
            'product_count' => $data['cart_product_count'],
            'product_price' => $data['cart_product_price']
        );
        Session::put('cart',$cart);
        Session::save(); 
      
    }

    public function showCart (Request $request){

        $types = product_type::all();
       
        return view('home.cart.cart_show')->with(compact('types'));
    }
}
