<?php

namespace lastejas\Http\Controllers;
use lastejas\User;
use lastejas\Branch;
use lastejas\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use lastejas\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
    	$users = DB::table('Users as u')
    	->join('Districts as d','u.idDistrict','=','d.idDistrict')
    	->join('Provinces as p', 'd.idProvince','=','p.idProvince')
    	->join('Departments as dep', 'p.idDepartment','=','dep.idDepartment')
    	->select('u.*','d.nameDistrict','p.nameProvince','dep.nameDepartment')
    	->paginate(1);
    	$branches = Branch::all();
    	$roles = Role::all();
    	return view('auth.index', compact('users','branches','roles'));
    }
    public function edit($id){
    	$user = User::find($id);
    	return view('auth.edit', compact('user'));
    }
    public function update(UserFormRequest $u){
    	$u->user()->fill([
    		'nameUser' => $u->nameUser,
            'firstSurNameUser' => $u->firstSurNameUser,
            'secondSurNameUser' => $u->secondSurNameUser,
            'genderUser' => $u->genderUser,
            'dniUser' => $u->dniUser,
            'rucUser' => $u->rucUser,
            'addressUser' => $u->addressUser,
            'phoneUser' => $u->phoneUser,
            'cellPhoneUser' => $u->cellPhoneUser,
            'email' => $u->email,
            'birthdayUser' => $u->birthdayUser,
            'nickNameUser' => $u->nickNameUser,
            'password' => Hash::make($u->password),
            'idDistrict' => $u->districts,
        ])->save();
        return redirect()->route('auth.index');
    }
    public function destroy($id){
    	User::find($id)->fill([
    		'statusUser' => 'Desactivado'
        ])->update();
        return Redirect::to('auth');
    }
}
