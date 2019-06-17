<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantdatamanagerRequest extends FormRequest
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
            'user_id' => 'required|unique:applicantdatamanagers',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'number_of_kids' => 'required',
            'religion' => 'required',
            'phone_number' => 'required'
        ];
    }
}
