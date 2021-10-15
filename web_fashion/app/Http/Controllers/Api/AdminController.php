<?php

namespace App\Http\Controllers\Api;


namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {     
        return view('admin.Authen.login_Admin');
    }

    public function signUp()
    {     
        return view('admin.Authen.signup_Admin');
    }
}
