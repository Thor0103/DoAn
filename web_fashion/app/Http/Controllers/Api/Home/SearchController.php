<?php

namespace App\Http\Controllers\Api\Home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function ajaxSearch (Request $request){

                $query = $request->get('query');
                $data = Product::where('ProductName','LIKE',"%{$query}%")->orderBy('ProductName')->get();
        
                return response()->json(['data'=>$data],200);
    }
}