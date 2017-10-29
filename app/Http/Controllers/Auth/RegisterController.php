<?php

namespace lastejas\Http\Controllers\Auth;

use lastejas\User;
use lastejas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/auth';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
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
        ];
        return Validator::make($data, [
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
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \lastejas\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nameUser' => $data['nameUser'],
            'firstSurNameUser' => $data['firstSurNameUser'],
            'secondSurNameUser' => $data['secondSurNameUser'],
            'genderUser' => $data['genderUser'],
            'dniUser' => $data['dniUser'],
            'rucUser' => $data['rucUser'],
            'addressUser' => $data['addressUser'],
            'phoneUser' => $data['phoneUser'],
            'cellPhoneUser' => $data['cellPhoneUser'],
            'email' => $data['email'],
            'birthdayUser' => $data['birthdayUser'],
            'statusUser' => 'Activo',
            'nickNameUser' => $data['nickNameUser'],
            'password' => bcrypt($data['password']),
            'idDistrict' => $data['idDistrict'],
        ]);
    }
}
