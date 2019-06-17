<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Residentialaddress extends Model
{
    protected $fillable = [
        'user_id','landmarks','residedntial_area','house_number','street_name','suburb','town','district','region','past_residential_address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
