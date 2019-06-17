<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    protected $fillable = [
        'user_id','date','witness_name','witness_phone_number','witness_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
