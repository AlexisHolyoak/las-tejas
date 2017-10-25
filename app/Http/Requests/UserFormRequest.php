<?php

namespace lastejas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
        ];
    }
}
