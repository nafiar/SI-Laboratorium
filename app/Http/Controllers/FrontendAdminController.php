<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

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
 
    public function pinjamBarang(){ 
      return view('pinjam-barang'); 
    } 
 
    public function register(){ 
      return view('register'); 
    }

    public function printLaporan(){
      $pdf = PDF::loadView('laporan');
      $pdf->setPaper('A4', 'potrait');
      $name = "Laporan Reservasi Laboratorium Pemrograman.pdf";
      return $pdf->stream($name);
    }

}
