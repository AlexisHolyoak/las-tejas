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
Route::prefix('platillos')->group(function(){
    Route::get('/', 'Dishes\Dishes@index');
    Route::post('/agregar', 'Dishes\Dishes@store');
    Route::post('/refresh', 'Dishes\Dishes@refreshProducts');
    Route::post('/edit/{id}', 'Dishes\Dishes@edit');
    Route::put('/update/{id}', 'Dishes\Dishes@update');
    Route::post('/delete/{id}', 'Dishes\Dishes@delete');
});
Route::get('/mozo/',function(){
  return view('mozo.mesas');
});
Route::resource('table','TableController');
Route::get('/ajax-users/{id}',function($id){
  $userroles=DB::table('Users as u')
  ->join('UserRoles as ur','u.idUser','ur.idUser')
  ->select('u.idUser as ID','u.nameUser as USER','u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
  ->where('ur.idRole','=','2')
  ->where('ur.idBranch',$id)
  ->get();
  return Response::json($userroles);
});
