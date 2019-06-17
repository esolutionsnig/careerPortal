<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidentialaddressRequest extends FormRequest
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
            'user_id' => 'required|unique:residentialaddresses',
            'landmarks' => 'required',
            'house_number' => 'required',
            'street_name' => 'required',
            'town' => 'required',
            'past_residential_address' => 'required'
        ];
    }
}
