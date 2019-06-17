<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = [
        'user_id','guardian_name','guardian_nationality','guardian_address','guardian_occupation','guardian_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
