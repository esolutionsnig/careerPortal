<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable = [
        'user_id','name','address','phone_number','email_address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
