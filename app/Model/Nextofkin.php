<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Nextofkin extends Model
{
    protected $fillable = [
        'user_id','name','relationship','office_address','office_phone','home_address','home_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
