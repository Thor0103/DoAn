<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\product_size; 
use App\Models\product_sale;
use App\Models\product_brand; 
use App\Models\product_type;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use File;
use DateTime;
use Session;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function authenLogin(){
        $admin_status = Session::get('name');
        if($admin_status){
            return Redirect::to('api/admin')->send();
        }else{
            return Redirect::to('api/product');
            
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $products = Product::with('product_Type','product_Size','product_Sale','product_Brand')->orderBy('ProductID','DESC')->get();
        return view('admin.product.get_Products')->with(compact('products'));
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $type = product_type::where('Status',1)->get();
        $brand = product_brand::all();
        $sale = product_sale::all();
        $size = product_size::all();
        return response()->json(['data'=>$type,'brand'=>$brand, 'size'=>$size, 'sale'=>$sale],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $product = new Product();
        $product -> ProductName = $request->name;
        $product -> ProductPrice = $request->price;
        $product -> ProductCount = $request->count;
        $product -> ProductName = $request->name;
        $product -> Size = $request->size;
        $product -> Type = $request->type;
        $product -> Brand = $request->brand;
        $product -> Sale = $request->sale;
        $product -> Note = $request->note;

        if($request['ImageUpload']){
            $ProductImage = $request['ImageUpload'];
            $ext = $ProductImage->getClientOriginalExtension();
            $name = time().'_'.$ProductImage->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($ProductImage));
            $product->ProductImage = $name;
        }else{
            $product->ProductImage ='default.jpg';
        }
        $date = new DateTime();
        $product->ProductCreatedDate = $date;
        $product->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       
        $sales =product_sale::all();
        $sizes =product_size::all();
        $brands =product_brand::all();
        $types = product_type::all();
        $product = Product::find($id);
        return view('admin.product.edit_Product')->with(compact('product','types','brands','sizes','sales'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $product =  Product::find($id);
        $product -> ProductName = $request->name;
        $product -> ProductPrice = $request->price;
        $product -> ProductCount = $request->count;
        $product -> ProductName = $request->name;
        $product -> Size = $request->size;
        $product -> Type = $request->type;
        $product -> Brand = $request->brand;
        $product -> Sale = $request->sale;
        $product -> Note = $request->note;

        if($request['ImageUpload']){

            $ProductImage = $request['ImageUpload'];
            $ext = $ProductImage->getClientOriginalExtension();
            $name = time().'_'.$ProductImage->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($ProductImage));
            $product->ProductImage = $name;
     
        }

        $product->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // $path = 'public/uploads/';
        // unlink($path.$id->ProductImage);
        Product::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}
