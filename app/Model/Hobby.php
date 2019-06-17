<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = [
        'user_id','title'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
