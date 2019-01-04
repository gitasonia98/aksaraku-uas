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
//layout display
//Route:get('/','LayoutController@layout');



//admin
Route::get('/','AksaraController@index');
Route::get('home', 'AksaraController@index');
Route::get('buku', 'AksaraController@buku');
Route::get('datauser', 'AksaraController@datauser');
Route::get('send', 'AksaraController@send');
Route::get('pembelian', 'AksaraController@pembelian');

//register lihat di logincontroller.php
Route::get('/register', 'Auth\LoginController@getRegister')->name('register');
Route::post('register', 'Auth\LoginController@postRegister');
// login
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

//BUKU
Route::post('buku', 'AksaraController@simpanproduk');
Route::get('tambahproduk', 'AksaraController@tambahproduk');
Route::get('deletebuku/{id}', 'AksaraController@deletebuku');
Route::get('updatebuku/{id}', 'AksaraController@updatebuku');

//USER
Route::post('datauser','AksaraController@simpanuser');
Route::get('deleteuser/{id}','AksaraController@deleteuser');
Route::get('tambahuser', 'AksaraController@tambahuser');
Route::get('updateuser/{id}', 'AksaraController@updateuser');

// session user
Route::get('homeuser','HomeController@index');
Route::get('profiluser','HomeController@user');
Route::post('user','HomeController@editprofil');
Route::get('daftarbuku','HomeController@daftarbuku');
Route::get('uploadscript','HomeController@script');
Route::get('notification','HomeController@notifications');
Route::post('uploadscript','HomeController@simpanproduk');
Route::post('profiluser','HomeController@editprofil');
Route::get('/notifications', function (){
return 'HOME';
})->name('notifications');
