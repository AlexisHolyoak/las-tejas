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
Route::resource('branch', 'BranchController');
Route::resource('auth', 'UserController');
Route::get('auth/create', function(){
	return view('auth.create');
});
Route::resource('role', 'RoleController');
//AJAX UBIGEO
Route::get('/ajax-departments/',function(){
  return Response::json(lastejas\Department::all());
});
Route::get('/ajax-provinces/{id}',function($id){
  return Response::json(lastejas\Province::where('idDepartment', $id)->get());
});
Route::get('/ajax-districts/{id}',function($id){
  return Response::json(lastejas\District::where('idProvince', $id)->get());
});