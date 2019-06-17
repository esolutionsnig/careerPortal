<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'surname' => $this->name,
            'firstname' => $this->firstname,
            'othernames' => $this->othernames,
            'email' => $this->email,
            'href' => [
                'academiceducations' => route('academiceducations.index',$this->id),
                'applicantdatamanagers' => route('applicantdatamanagers.index', $this->id),
                'bankingdetails' => route('bankingdetails.index', $this->id),
                'declarations' => route('declarations.index', $this->id),
                'employmenthistories' => route('employmenthistories.index', $this->id),
                'employmentselfassessments' => route('employmentselfassessments.index', $this->id),
                'fullselfdisclosures' => route('fullselfdisclosures.index', $this->id),
                'generals' => route('generals.index', $this->id),
                'guardians' => route('guardians.index', $this->id),
                'hobbies' => route('hobbies.index', $this->id),
                'hometownaddresses' => route('hometownaddresses.index', $this->id),
                'nationalservices' => route('nationalservices.index', $this->id),
                'nextofkins' => route('nextofkins.index', $this->id),
                'prents' => route('prents.index', $this->id),
                'professionalmemberships' => route('professionalmemberships.index', $this->id),
                'professionalqualifications' => route('professionalqualifications.index', $this->id),
                'referees' => route('referees.index', $this->id),
                'residentialaddresses' => route('residentialaddresses.index', $this->id),
                'schoolleavingcertificates' => route('schoolleavingcertificates.index', $this->id),
                'socialmemberships' => route('socialmemberships.index', $this->id),
                'sports' => route('sports.index', $this->id),
            ]
        ];
    }
}
