<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Schoolleavingcertificate extends Model
{
    protected $fillable = [
        'user_id','school','year','result_1','result_2','result_3','result_4','result_5'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
