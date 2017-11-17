<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lastejas\{User,Branch,Role,UserRole,Department,Province,District};
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	$search=trim($request->get('search'));
    	$users=DB::table('Users as us')
    	->join('Districts as di','us.idDistrict','di.idDistrict')
    	->join('Provinces as pr','di.idProvince','pr.idProvince')
    	->join('Departments as de','pr.idDepartment','de.idDepartment')
    	->select('us.*','di.nameDistrict as district','pr.nameProvince as province','de.nameDepartment as department')
    	->whereRaw(" LOWER(\"us\".\"nameUser\") LIKE '%".strtolower($search)."%' OR (LOWER(\"us\".\"firstSurNameUser\") LIKE '%".strtolower($search)."%' OR LOWER(\"us\".\"secondSurNameUser\") LIKE '%".strtolower($search)."%') ")
    	->paginate(4);
        $userrole = null;
        foreach ($users as $u) {
            $userrole[] =  collect(['idUser'=>$u->idUser,'roles'=>DB::table('UserRoles as ur')->where('idUser',$u->idUser)->join('Roles as r','ur.idRole','r.idRole')->select('r.idRole','r.nameRole','ur.statusUserRole')->orderBy('r.idRole','asc')->get(),'branch'=>DB::table('UserRoles')->where('idUser',$u->idUser)->select('idBranch')->first()]);
        }
        $branches = Branch::all();
        $roles = Role::all();
    	return view('auth.index', compact('users','search','branches','roles','userrole'));
    }
    public function store(Request $request){
        $validations = Validator::make($request->all(), [
            'nameUser' => 'required|string|max:255',
            'firstSurNameUser' => 'required|string|max:255',
            'secondSurNameUser' => 'required|string|max:255',
            'genderUser' => 'required',
            'dniUser' => 'required|min:8',
            'rucUser' => 'required|min:11',
            'addressUser' => 'required',
            'phoneUser' => 'required|min:7',
            'cellPhoneUser' => 'required|min:9',
            'email' => 'required|string|email|max:255|unique:Users',
            'birthdayUser' => 'required',
            'nickNameUser' => 'required|string|max:255|unique:Users',
            'password' => 'required|string|min:6|confirmed',
            'department' => 'required',
            'province' => 'required',
            'idDistrict' => 'required',
        ],
        [
            'nameUser.required' => 'Agrega el nombre.',
            'firstSurNameUser.required' => 'Agrega el Apellido Paterno.',
            'secondSurNameUser.required' => 'Agrega el Apellido Materno.',
            'genderUser.required' => 'Agrega el Género.',
            'dniUser.required' => 'Agrega el Apellido Materno.',
            'dniUser.min' => 'DNI debe tener 8 digitos.',
            'rucUser.required' => 'Agrega el Apellido Materno.',
            'rucUser.min' => 'RUC debe tener 11 dígitos.',
            'addressUser.required' => 'Agrega la dirección.',
            'phoneUser.required' => 'Agrega el # Teléfono.',
            'phoneUser.min' => '# Teléfono debe tener 7 dígitos.',
            'cellPhoneUser.required' => 'Agrega el # Celular.',
            'cellPhoneUser.min' => '# Celular debe tener 9 dígitos.',
            'birthdayUser.required' => 'Agrega la Fecha de Nacimiento.',
            'nickNameUser.required' => 'Agrega el Usuario.',
            'password.required' => 'Agrega la Contraseña.',
            'password.min' => 'La Contraseña debe tener 6 dígitos como mínimo.',
            'password.confirmed' => 'La Contraseña no coincide.',
            'department.required' => 'Seleccione un Departamento.',
            'province.required' => 'Seleccione una Provincia.',
            'idDistrict.required' => 'Seleccione un Distrito.',
        ]);

        if ($validations->fails())
        {
            return redirect()->back()->withInput()->withErrors($validations->errors());
        }
        $user =new User;
        $user->nameUser = $request->get('nameUser');
        $user->firstSurNameUser = $request->get('firstSurNameUser');
        $user->secondSurNameUser = $request->get('secondSurNameUser');
        $user->genderUser = $request->get('genderUser');
        $user->dniUser = $request->get('dniUser');
        $user->rucUser = $request->get('rucUser');
        $user->addressUser = $request->get('addressUser');
        $user->phoneUser = $request->get('phoneUser');
        $user->cellPhoneUser = $request->get('cellPhoneUser');
        $user->birthdayUser = $request->get('birthdayUser');
        $user->email = $request->get('email');
        $user->statusUser = 'Activo';
        $user->nickNameUser = $request->get('nickNameUser');
        $user->password = bcrypt($request->get('password'));
        $user->idDistrict = $request->get('idDistrict');
        $es = $user->save();
        return redirect()->route('auth.index');
    }
    public function edit($id)
    {
    	$users=DB::table('Users as us')
    	->join('Districts as di','us.idDistrict','di.idDistrict')
    	->join('Provinces as pr','di.idProvince','pr.idProvince')
    	->join('Departments as de','pr.idDepartment','de.idDepartment')
    	->select('us.*','di.*','pr.*','de.*')
    	->where('us.idUser',$id)->first();
    	return view('auth.edit',compact('users'));
    }
    public function update(Request $request, $id){
        $validations = Validator::make($request->all(), [
            'nameUser' => 'required|string|max:255',
            'firstSurNameUser' => 'required|string|max:255',
            'secondSurNameUser' => 'required|string|max:255',
            'genderUser' => 'required',
            'dniUser' => 'required|min:8',
            'rucUser' => 'required|min:11',
            'addressUser' => 'required',
            'phoneUser' => 'required|min:7',
            'cellPhoneUser' => 'required|min:9',
            'birthdayUser' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'department' => 'required',
            'province' => 'required',
            'idDistrict' => 'required',
        ],
        [
            'nameUser.required' => 'Agrega el nombre.',
            'firstSurNameUser.required' => 'Agrega el Apellido Paterno.',
            'secondSurNameUser.required' => 'Agrega el Apellido Materno.',
            'genderUser.required' => 'Agrega el Género.',
            'dniUser.required' => 'Agrega el Apellido Materno.',
            'dniUser.min' => 'DNI debe tener 8 digitos.',
            'rucUser.required' => 'Agrega el Apellido Materno.',
            'rucUser.min' => 'RUC debe tener 11 dígitos.',
            'addressUser.required' => 'Agrega la dirección.',
            'phoneUser.required' => 'Agrega el # Teléfono.',
            'phoneUser.min' => '# Teléfono debe tener 7 dígitos.',
            'cellPhoneUser.required' => 'Agrega el # Celular.',
            'cellPhoneUser.min' => '# Celular debe tener 9 dígitos.',
            'birthdayUser.required' => 'Agrega la Fecha de Nacimiento.',
            'password.required' => 'Agrega la Contraseña.',
            'password.min' => 'La Contraseña debe tener 6 dígitos como mínimo.',
            'password.confirmed' => 'La Contraseña no coincide.',
            'department.required' => 'Seleccione un Departamento.',
            'province.required' => 'Seleccione una Provincia.',
            'idDistrict.required' => 'Seleccione un Distrito.',
        ]);

        if ($validations->fails())
        {
            return redirect()->back()->withInput()->withErrors($validations->errors());
        }
        $user = User::find($id);
		$user->nameUser = $request->get('nameUser');
        $user->firstSurNameUser = $request->get('firstSurNameUser');
        $user->secondSurNameUser = $request->get('secondSurNameUser');
        $user->genderUser = $request->get('genderUser');
        $user->dniUser = $request->get('dniUser');
        $user->rucUser = $request->get('rucUser');
        $user->addressUser = $request->get('addressUser');
        $user->phoneUser = $request->get('phoneUser');
        $user->cellPhoneUser = $request->get('cellPhoneUser');
        $user->birthdayUser = $request->get('birthdayUser');
        $user->password = bcrypt($request->get('password'));
        $user->idDistrict = $request->get('idDistrict');
		$es = $user->save();
		return redirect()->route('auth.index');
    }
    public function destroy($id){
    	$user = User::find($id);
        $user->statusUser = $user->statusUser=='Activo'?"Inactivo":'Activo';
        $user->save();
        return redirect()->route('auth.index');
    }
    public function userrole(Request $request, $id){
        $roles = UserRole::where('idUser',$id)->get();
        if(sizeof($roles)==0){
            foreach (Role::all() as $r) {
                $status=0;
                $ur = new UserRole;
                $ur->idUser = $id;
                $ur->idRole = $r->idRole;
                $ur->idBranch = $request->get('branch');
                if(!empty($request->get('role'))){
                    foreach ($request->get('role') as $role) {
                        if($r->idRole == $role){
                            $status = 1;
                        }
                    }
                }
                $ur->statusUserRole = $status;
                $ur->save();
            }
        }else{
            $urs = DB::table('UserRoles')->where('idUser', $id)->select('idUserRole','idRole','statusUserRole')->get();
            foreach ($urs as $u) {
                $status=0;
                $ur = UserRole::find($u->idUserRole);
                if(!empty($request->get('role'))){
                    foreach ($request->get('role') as $role) {
                        if($ur->idRole == $role){
                            $status = 1;
                        }
                    }
                }
                $ur->statusUserRole = $status;
                $ur->idBranch = $request->get('branch');
                $ur->save();
            }
        }
        return redirect()->route('auth.index');
    }
}
