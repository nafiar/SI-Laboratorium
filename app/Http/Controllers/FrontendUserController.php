<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendUserController extends Controller
{
    public function index(){
    	return view('home2');
    }

    public function formReservasi(){
    	return view('form-reservasi');
    }

    public function hilang(){
    	return view('hilang');
    }

    public function infolab(){
    	return view('infolab');
    }
}
