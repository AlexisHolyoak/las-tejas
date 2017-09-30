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

Route::get('/cocinero', function () {
    return view('cocinero.platillos');
})->name('cocinero');
Route::view('/cocinero/ordenes', 'cocinero.ordenes')->name('platillos');
