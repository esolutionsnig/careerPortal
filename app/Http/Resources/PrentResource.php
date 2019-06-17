<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrentResource extends JsonResource
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
            'user_id' => $this->user_id,
            'father_name' => $this->father_name,
            'father_nationality' => $this->father_nationality,
            'father_occupation' => $this->father_occupation,
            'father_address' => $this->father_address,
            'father_phone' => $this->father_phone,
            'mother_name' => $this->mother_name,
            'mother_nationality' => $this->mother_nationality,
            'mother_occupation' => $this->mother_occupation,
            'mother_address' => $this->mother_address,
            'mother_phone' => $this->mother_phone,
        ];
    }
}
