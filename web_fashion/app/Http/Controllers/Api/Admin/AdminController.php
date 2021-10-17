<?php

namespace App\Http\Controllers\Api\Admin;

use Session;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
session_start();

class AdminController extends Controller
{

    public function login()
    {     
        return view('admin.Authen.login_Admin');
    }

    public function home()
    {     
        return view('admin.Authen.home_Admin');
    }

  
    public function check(Request $request)
    {     
       
        $user = $request->user;
        $pass = md5($request->pass);

        $result = Admin::where('UserName',$user)->where('PassWord',$pass)->first();

        if($result){
                $a = $request->FullName;
                $b = $request->UserName;
                Session::put('status',$result->Status);
                Session::put('name',$result->FullName);
            return view('admin.Authen.home_Admin');
        }else{
                Session::put('message','Login name or password is incorrect. Please enter again !');
            return view('admin.Authen.login_Admin');
        }
        return view('admin.Authen.login_Admin');
    }

    public function logout()
    {    
        Session::put('name',null);
        Session::put('status',null);
        return view('admin.Authen.login_Admin');
    }

}