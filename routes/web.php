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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('register');
// });

// TUGAS PEKAN 3 HARI 2 //
Route::get('/form', 'PerkenalanController@form');
Route::get('/selamat-datang', 'PerkenalanController@selamat_datang');
Route::get('/home', 'HomeController@home');
//Route::get('/form-register', 'AuthController@ ');



//TUGAS PEKAN 3 HARI 3//
Route::get('/master', function(){
    return view('master');});
// datatables
Route::get('/table', function(){
    return view('table'); });

