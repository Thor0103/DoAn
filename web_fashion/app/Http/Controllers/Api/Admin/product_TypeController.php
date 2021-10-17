<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\product_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class product_TypeController extends Controller
{

    public function authenLogin(){
        $admin_user = Session::get('admin_user');

        if($admin_user){
            return Redirect::to('api/homes');
        }else{
            return Redirect::to('api/admin')->send();
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
        $type = product_type::where('Status',1)->get();
        return view('admin.productType.get_Type')->with(compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     ** 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authenLogin();
        $type = new  product_type();
        $type->TypeName = $request->type;
        $type->Status = '1';
        $type->save();
        return redirect()->back();
    }
  

    /**
     * Display the specified resource.
     * @param  \App\Models\product_type  $product_type
     * @return \Illuminate\Http\Response
     */
    public function show( $product_type)
    {
        $this->authenLogin();
        $types = product_type::find($product_type);
        return view('admin.productType.edit')->with(compact('types'));
         
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_type  $product_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $product_type)
    {
        $this->authenLogin();
        $data = $request->all();
        $type = product_type::find($product_type);
        $type->TypeName = $data['type'];
        $type->save();
        Session::put('users', 'Update Successfully ');
        return \Redirect::route('product-type.index')->with('users','Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_type  $product_type
     * @return \Illuminate\Http\Response
     */
    public function destroy( $product_type)
    {
        $this->authenLogin();
        product_type::find($product_type)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}
