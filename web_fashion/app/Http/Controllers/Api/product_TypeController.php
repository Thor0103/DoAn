<?php

namespace App\Http\Controllers\Api;

use App\Models\product_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class product_TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        product_type::find($product_type)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}
