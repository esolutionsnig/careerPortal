<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankingdetailRequest extends FormRequest
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
            'bank_name' => 'required',
            'account_number' => 'required|unique:bankingdetails',
            'account_status' => 'required',
            'bvn_number' => 'required'
        ];
    }
}
