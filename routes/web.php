<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/hilang' , 'FrontendUserController@hilang');
Route::get('/home' , 'FrontendUserController@index');
Route::get('/reservasi' , 'FrontendUserController@formReservasi');
Route::get('/kalender', 'FrontendUserController@kalender');
Route::get('/homelab', 'FrontendUserController@homelab');
Route::get('/login', 'FrontendAdminController@login');
Route::get('/index', 'FrontendAdminController@index');
Route::get('/infolab' , 'FrontendUserController@infolab');
Route::get('/barang-hilang' , 'FrontendAdminController@barangHilang');
Route::get('/pinjam-barang' , 'FrontendAdminController@pinjamBarang');

Route::get('/', function () {
    return view('home');
});

Route::get('/coba', function () {
    return view('coba');
});
