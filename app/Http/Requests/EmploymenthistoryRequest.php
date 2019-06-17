<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmploymenthistoryRequest extends FormRequest
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
            'user_id' => 'required',
            'employer_name' => 'required',
            'employer_address' => 'required',
            'employer_phone' => 'required',
            'job_grade' => 'required',
            'job_function' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'monthly_income' => 'required',
            'reason_for_leaving' => 'required'
        ];
    }
}
