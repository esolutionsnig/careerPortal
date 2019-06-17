<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Fullselfdisclosure extends Model
{
    protected $fillable = [
        'user_id','description','your_response','additional_details'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
