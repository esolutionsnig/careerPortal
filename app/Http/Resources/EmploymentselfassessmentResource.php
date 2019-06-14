<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmploymentselfassessmentResource extends JsonResource
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
            'interview_date' => $this->interview_date,
            'current_engagements' => $this->current_engagements,
            'last_monthly_salary' => $this->last_monthly_salary,
            'non_cash_incentives' => $this->non_cash_incentives,
            'minimum_salary_expectation' => $this->minimum_salary_expectation,
            'profile_summary' => $this->profile_summary,
            'why_you' => $this->why_you,
            'five_years_expectation' => $this->five_years_expectation,
            'why_you_left' => $this->why_you_left,
            'most_challenging' => $this->most_challenging,
            'professional_challenge' => $this->professional_challenge,
            'job_accomplishments' => $this->job_accomplishments,
            'what_you_offer' => $this->what_you_offer,
            'interviewed_by' => $this->interviewed_by,
            'interviewed_on' => $this->interviewed_on,
        ];
    }
}
