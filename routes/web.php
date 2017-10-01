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
Route::get('platillos','CocinerosController@platillos')->name('platillos');
Route::get('ordenes','CocinerosController@ordenes')->name('ordenes');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('cocineros','PlatillosController@index')->name('cocineros');
