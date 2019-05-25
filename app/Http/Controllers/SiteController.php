<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function home(){
        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }


}
