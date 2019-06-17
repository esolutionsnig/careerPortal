<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademiceducationRequest extends FormRequest
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
            'institution' => 'required|max:191',
            'date_of_attendance' => 'required',
            'qualification' => 'required'
        ];
    }
}
