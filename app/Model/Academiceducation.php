<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Academiceducation extends Model
{
    protected $fillable = [
        'user_id', 'institution', 'date_of_attendance', 'qualification'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
