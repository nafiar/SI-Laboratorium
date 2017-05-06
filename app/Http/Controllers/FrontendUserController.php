<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendUserController extends Controller
{
    public function index(){
    	return view('userhome');
    }

    public function formReservasi(){
    	return view('form-reservasi');
    }
}
