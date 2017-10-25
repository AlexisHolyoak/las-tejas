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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nameUser'=>'required',
            'firstSurNameUser'=>'required',
            'secondSurNameUser'=>'required',
            'genderUser'=>'required',
            'dniUser'=>'required',
            'rucUser'=>'required',
            'addressUser'=>'required',
            'phoneUser'=>'required|min:7',
            'cellPhoneUser'=>'required|min:9',
            'email'=>'required|string|email|max:255|unique:Users',
            'birthdayUser'=>'required',
            'nickNameUser'=>'required',
            'password'=>'required|string|min:6|confirmed',
            'districts'=>'numeric|required'
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \lastejas\Models\User
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
            'idDistrict' => $data['districts'],
        ]);
    }
}
