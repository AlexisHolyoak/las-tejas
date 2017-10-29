<?php

namespace lastejas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'nameBranch' => 'required|string|max:255|unique:Branches',
            'kinOfBussinessBranch' => 'required|string|max:255',
            'rucBranch' => 'required|string',
            'addressBranch' => 'required|string|max:255',
            'logoBranch' => 'required|max:255',
            'kinOfExchangeBranch' => 'required|string',
        ];
    }
}
