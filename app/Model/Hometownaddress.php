<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Hometownaddress extends Model
{
    protected $fillable = [
        'user_id','landmarks','residential_area','house_number','street_name','suburb','town','district','home_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
