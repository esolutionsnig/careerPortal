<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Employmenthistory extends Model
{
    protected $fillable = [
        'user_id','employer_name','employer_address','employer_phone','job_grade','job_function','start_date','end_date','monthly_income',
        'reason_for_leaving'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
