<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    protected $fillable = [
        'user_id','dependant_name','relationship','date_of_birth','gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
