<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Prent extends Model
{
    protected $fillable = [
        'user_id','father_name','father_nationality','father_occupation','father_address','father_phone','mother_name','mother_maiden_name','mother_nationality','mother_occupation','mother_address','mother_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
