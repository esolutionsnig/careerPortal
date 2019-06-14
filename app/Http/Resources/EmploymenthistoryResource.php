<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmploymenthistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'employer_name' => $this->employer_name,
            'employer_address' => $this->employer_address,
            'employer_phone' => $this->employer_phone,
            'job_grade' => $this->job_grade,
            'job_function' => $this->job_function,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'monthly_income' => $this->monthly_income,
            'reason_for_leaving' => $this->reason_for_leaving,
        ];
    }
}
