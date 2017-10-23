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

Route::get('/clientes/platillos', function () {
    return view('clientes.platillos');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ordenes/',function(){
  return view('cocinero.ordenes');
});
Route::get('/platillos/',function(){
  return view('cocinero.platillos');
});
Route::get('/mozo/',function(){
  return view('mozo.mesas');
});
