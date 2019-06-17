<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = [
        'user_id','type_of_game','club','date','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
