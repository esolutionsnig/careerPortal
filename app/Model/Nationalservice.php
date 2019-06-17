<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Nationalservice extends Model
{
    protected $fillable = [
        'user_id','place_of_assignment','year','job_function'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
