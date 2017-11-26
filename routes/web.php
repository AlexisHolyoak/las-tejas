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
    Route::post('/edit/{id}', 'Dishes\Dishes@edit');
    Route::post('/update/{id}', 'Dishes\Dishes@update');
    Route::post('/delete/{id}', 'Dishes\Dishes@delete');
});
Route::get('/mozo/',function(){
  return view('mozo.mesas');
});
Route::resource('branch', 'BranchController');
Route::resource('auth', 'UserController');
Route::post('/userrole/{id}', 'UserController@userrole');
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
Route::prefix('reports')->group(function(){
    Route::get('/', 'ReportController@index');
    Route::get('/user/pdf/{id}', 'ReportController@reportUsersPdf');
    Route::get('/user/excel', 'ReportController@reportUsersXls');
    Route::get('/dishes/pdf/{id}', 'ReportController@reportDishesPdf');
    Route::get('/dishes/excel', 'ReportController@reportDishesXls');
    Route::get('/supplies/pdf/{id}', 'ReportController@reportSuppliesPdf');
    Route::get('/supplies/excel', 'ReportController@reportSuppliesXls');
    Route::get('/orderdishes/pdf/{id}', 'ReportController@reportOrderDishesPdf');
    Route::get('/orderdishes/excel', 'ReportController@reportOrderDishesXls');
});
