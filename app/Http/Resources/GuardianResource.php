<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuardianResource extends JsonResource
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
            'guardian_name' => $this->guardian_name,
            'guardian_nationality' => $this->guardian_nationality,
            'guardian_address' => $this->guardian_address,
            'guardian_occupation' => $this->guardian_occupation,
            'guardian_phone' => $this->guardian_phone,
        ];
    }
}
