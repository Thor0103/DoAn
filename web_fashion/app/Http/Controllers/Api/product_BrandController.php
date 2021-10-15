<?php

namespace App\Http\Controllers\Api;
use App\Models\product_brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class product_BrandController extends Controller
{
    public function authenLogin(){
        $admin_user = Session::get('admin_user');

        if($admin_user){
            return Redirect::to('homes');
        }else{
            return Redirect::to('admin')->send();
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
        $brand = product_brand::all();
        return view('admin.productBrand.get_Brand')->with(compact('brand'));
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authenLogin();
        $brand = new  product_brand();
        $brand->BrandName = $request->brand;
        $brand->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_brand)
    {
        $this->authenLogin();
        $brands = product_brand::find($product_brand);
        return view('admin.productBrand.edit_Brand')->with(compact('brands'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_brand)
    {
        $this->authenLogin();
        $data = $request->all();
        $brand = product_brand::find($product_brand);
        $brand->BrandName = $data['brand'];
        $brand->save();
        Session::put('users', 'Update Successfully ');
        return \Redirect::route('product-brand.index')->with('users','Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_brand)
    {
        $this->authenLogin();
        product_brand::find($product_brand)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}
