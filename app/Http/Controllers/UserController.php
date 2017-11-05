<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lastejas\{User,Department,Province,District};
use Illuminate\Support\Facades\Hash;
use Validator;
use PDF;

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
    	return view('auth.index', compact('users','search'));
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
    public function generarPDF(){
      $users=User::all();
      $pdf=PDF::loadView('reporte.reportetotal',['users'=>$users]);
      return $pdf->stream('reporte1.pdf');
    }
    public function descargarPDF(){
      $users=User::all();
      $pdf=PDF::loadView('reporte.reportetotal',['users'=>$users]);
      return $pdf->download('reporte2.pdf');
    }
}
