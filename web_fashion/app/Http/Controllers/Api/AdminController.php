<?php

namespace App\Http\Controllers\Api;

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
                Session::put('admin_name',$request->FullName);
                Session::put('admin_user',$request->UserName);
                return view('admin.Authen.home_Admin');
        }else{
                Session::put('message','Login name or password is incorrect. Please enter again !');
            return view('admin.Authen.login_Admin');
        }
        return view('admin.Authen.login_Admin');
    }

    public function logout()
    {    
        unset($_SESSION['counter']);
        return view('admin.Authen.login_Admin');
    }

}