<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Applicantdatamanager extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
