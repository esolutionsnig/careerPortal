<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Socialmembership extends Model
{
    protected $fillable = [
        'user_id','name','date','position','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
