<?php

namespace lastejas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [   
            'nameUser' => 'required|string|max:255',
            'firstSurNameUser' => 'required|string|max:255',
            'secondSurNameUser' => 'required|string|max:255',
            'genderUser' => 'required',
            'dniUser' => 'required|min:8',
            'rucUser' => 'required|min:11',
            'addressUser' => 'required',
            'phoneUser' => 'required|min:7',
            'cellPhoneUser' 'required|min:9'=> ,
            'email' => 'required|string|email|max:255|unique:Users',
            'birthdayUser' => 'required',
            'nickNameUser' => 'required|string|max:255|unique:Users',
            'password' => 'required|string|min:6|confirmed',
            'idDistrict' => 'required'
        ];
    }
}
