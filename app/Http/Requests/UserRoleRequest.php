<?php

namespace lastejas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRoleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idUser' => 'required',
            'idBranch' => 'required',
            'idRole' => 'required'
        ];
    }
}
