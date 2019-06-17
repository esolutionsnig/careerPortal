<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Applicantdatamanager extends Model
{
    protected $fillable = [
        'user_id', 'previous_name','why_change_name','birth_date','birth_place','nationality','id_card','gender','physical_defects','region','tribe','tribal_chief','marital_status','number_of_kids','religion','phone_number','height','weight','complexion','color_eyes','color_hair'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
