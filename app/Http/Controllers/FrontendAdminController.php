<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendAdminController extends Controller
{
    public function login(){
    	return view('loginadmin');
    }

    public function index(){
    	return view('index');
    }

    public function barangHilang(){
    	return view('barang-hilang');
    }
}
