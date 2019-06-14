<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantdatamanagerResource extends JsonResource
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
            'previous_name' => $this->previous_name,
            'why_change_name' => $this->why_change_name,
            'birth_date' => $this->birth_date,
            'birth_place' => $this->birth_place,
            'birth_certificate' => $this->birth_certificate,
            'nationality' => $this->nationality,
            'id_card' => $this->id_card,
            'gender' => $this->gender,
            'physical_defects' => $this->physical_defects,
            'region' => $this->region,
            'tribe' => $this->tribe,
            'tribal_chief' => $this->tribal_chief,
            'marital_status' => $this->marital_status,
            'number_of_kids' => $this->number_of_kids,
            'religion' => $this->religion,
            'phone_number' => $this->phone_number,
            'height' => $this->height,
            'weight' => $this->weight,
            'complexion' => $this->complexion,
            'color_eyes' => $this->color_eyes,
            'color_hair' => $this->color_hair,
            'thumbprint_right' => $this->thumbprint_right,
            'thumbprint_left' => $this->thumbprint_left,
            'passport_image' => $this->passport_image,
        ];
    }
}
