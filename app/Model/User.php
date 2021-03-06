<?php

namespace App\Model;

use Storage;
use App\Model\Hobby;
use App\Model\Prent;
use App\Model\Sport;
use App\Model\General;
use App\Model\Parents;

use App\Model\Referee;
use App\Model\Guardian;
use App\Model\Nextofkin;
use App\Model\Declaration;
use App\Model\Bankingdetail;
use App\Model\Hometownaddress;
use App\Model\Nationalservice;
use App\Model\Socialmembership;
use App\Model\Academiceducation;
use App\Model\Employmenthistory;
use App\Model\Fullselfdisclosure;
use App\Model\Residentialaddress;
use Laravel\Passport\HasApiTokens;
use App\Model\Applicantdatamanager;
use App\Model\Professionalmembership;
use App\Model\Employmentselfassessment;
use App\Model\Schoolleavingcertificate;
use Illuminate\Database\Eloquent\Model;
use App\Model\Professionalqualification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Model

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'firstname', 'othernames', 'email', 'password', 'active', 'activation_token', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activation_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['avatar_url'];
    public function getAvatarUrlAttribute()
    {
        // return Storage::url('avatars/'.$this->id.'/'.$this->avatar);
        return $this->avatar;
    }

    public function academiceducations()
    {
        return $this->hasMany(Academiceducation::class);
    }

    public function applicantdatamanagers()
    {
        return $this->hasMany(Applicantdatamanager::class);
    }

    public function bankingdetails()
    {
        return $this->hasMany(Bankingdetail::class);
    }

    public function declarations()
    {
        return $this->hasMany(Declaration::class);
    }

    public function dependants()
    {
        return $this->hasMany(Dependant::class);
    }

    public function employmenthistories()
    {
        return $this->hasMany(Employmenthistory::class);
    }

    public function employmentselfassessments()
    {
        return $this->hasMany(Employmentselfassessment::class);
    }

    public function fullselfdisclosures()
    {
        return $this->hasMany(Fullselfdisclosure::class);
    }

    public function generals()
    {
        return $this->hasMany(General::class);
    }

    public function guardians()
    {
        return $this->hasMany(Guardian::class);
    }

    public function hobbies()
    {
        return $this->hasMany(Hobby::class);
    }

    public function hometownaddresses()
    {
        return $this->hasMany(Hometownaddress::class);
    }

    public function nationalservices()
    {
        return $this->hasMany(Nationalservice::class);
    }

    public function nextofkins()
    {
        return $this->hasMany(Nextofkin::class);
    }

    public function prents()
    {
        return $this->hasMany(Prent::class);
    }

    public function professionalmemberships()
    {
        return $this->hasMany(Professionalmembership::class);
    }

    public function professionalqualifications()
    {
        return $this->hasMany(Professionalqualification::class);
    }

    public function referees()
    {
        return $this->hasMany(Referee::class);
    }

    public function residentialaddresses()
    {
        return $this->hasMany(Residentialaddress::class);
    }

    public function schoolleavingcertificates()
    {
        return $this->hasMany(Schoolleavingcertificate::class);
    }

    public function socialmemberships()
    {
        return $this->hasMany(Socialmembership::class);
    }

    public function sports()
    {
        return $this->hasMany(Sport::class);
    }
}
