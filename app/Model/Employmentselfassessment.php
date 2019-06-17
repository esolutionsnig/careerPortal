<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Employmentselfassessment extends Model
{
    protected $fillable = [
        'user_id','interview_date','current_engagements','last_monthly_salary','non_cash_incentives','minimum_salary_expectation','profile_summary','why_you','five_years_expectation','why_you_left','most_challenging','professional_challenge','job_accomplishments','what_you_offer','interviewed_by','interviewed_on'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
