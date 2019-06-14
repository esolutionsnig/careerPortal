<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HometownaddressResource extends JsonResource
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
            'landmarks' => $this->landmarks,
            'residential_area' => $this->residential_area,
            'house_number' => $this->house_number,
            'street_name' => $this->street_name,
            'suburb' => $this->suburb,
            'town' => $this->town,
            'district' => $this->district,
            'home_phone' => $this->home_phone,
        ];
    }
}
