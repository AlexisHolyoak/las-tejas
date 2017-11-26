<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
use lastejas\Role;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','role:Administrador']);
    }
    public function index()
    {
        $roles = Role::orderBy('idRole','asc')->get();
        return view('role.index', compact('roles'));
    }
    public function store(Request $request)
    {
        $role = new Role;
        $role->nameRole = $request->get('nameRole');
        $role->salaryRole = $request->get('salaryRole');
        $role->statusRole = 1;
        $role->save();
        return redirect()->route('role.index');
    }
    public function update(Request $request,$id){
        $role = Role::find($id);
        $role->nameRole = $request->get('nameRole');
        $role->salaryRole = $request->get('salaryRole');
        $role->save();
        return redirect()->route('role.index');
    }
    public function destroy($id){
    	$role = Role::find($id);
        $role->statusRole = $role->statusRole==1?0:1;
        $role->save();
        return redirect()->route('role.index');
    }
}
