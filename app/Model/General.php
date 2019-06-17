<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'user_id','computer_literacy','competence_profile','personal_traits '
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
