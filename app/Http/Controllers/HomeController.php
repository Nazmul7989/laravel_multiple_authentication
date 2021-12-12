<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');

//        $admin = Auth::user()->role_id == 1;
//
//        if ($admin){
//            return view('admin.home');
//        }else{
//            return  view('home');
//        }
    }

    public function superadmin()
    {
        return view('superadmin.home');
    }

    public function admin()
    {
        return view('admin.home');
    }
}
