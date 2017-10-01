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
define('FULL_URL_PROJECT', Request::url());
define('URL_PROJECT', str_replace(Request::path(), '', FULL_URL_PROJECT));

Route::get('/', function () {
    return view('welcome');
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

Route::prefix('caja')->group(function() {
    Route::get('/', function () { return view('caja.list'); });
    Route::get('/generar/{id}', function ($id) {
        $data['id'] = $id;
        $data['urlProject'] = URL_PROJECT;
        return view('caja.generate', $data);
    });
    Route::post('/terminar/{id}', function() {
        return redirect('caja');
    });
});
