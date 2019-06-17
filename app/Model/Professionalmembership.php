<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Professionalmembership extends Model
{
    protected $fillable = [
        'user_id','association','status','year_of_conferment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
