<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentsRequest extends FormRequest
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
            'user_id' => 'required|unique:parents',
            'father_name' => 'required',
            'father_nationality' => 'required',
            'father_occupation' => 'required',
            'father_address' => 'required',
            'father_phone' => 'required',
            'mother_name' => 'required',
            'mother_maiden_name' => 'required',
            'mother_nationality' => 'required',
            'mother_occupation' => 'required',
            'mother_address' => 'required',
            'mother_phone' => 'required'
        ];
    }
}
