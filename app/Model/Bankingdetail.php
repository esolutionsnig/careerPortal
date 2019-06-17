<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Bankingdetail extends Model
{
    protected $fillable = [
        'user_id','bank_name','account_number','account_status','bvn_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
