<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\product_size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class product_SizeController extends Controller
{

    public function authenLogin(){
        $admin_user = Session::get('admin_user');

        if($admin_user){
            return Redirect::to('api/homes');
        }else{
            return Redirect::to('api/admin');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authenLogin();
        $size = product_size::all();
        return view('admin.productSize.get_Size')->with(compact('size'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $size = new  product_size();
        $size->SizeName = $request->size;
        $size->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_size)
    {
       
        $sizes = product_size::find($product_size);
        return view('admin.productSize.edit_Size')->with(compact('sizes'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_size)
    {
        $this->authenLogin();
        $data = $request->all();
        $size = product_size::find($product_size);
        $size->SizeName = $data['size'];
        $size->save();
        Session::put('users', 'Update Successfully ');
        return \Redirect::route('product-size.index')->with('users','Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_size)
    {
        $this->authenLogin();
        product_size::find($product_size)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}
