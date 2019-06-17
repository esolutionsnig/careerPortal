<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolleavingcertificateRequest extends FormRequest
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
            'user_id' => 'required|unique:schoolleavingcertificates',
            'school' => 'required',
            'year' => 'required',
            'result_1' => 'required',
            'result_2' => 'required',
            'result_3' => 'required',
            'result_4' => 'required',
            'result_5' => 'required'
        ];
    }
}
