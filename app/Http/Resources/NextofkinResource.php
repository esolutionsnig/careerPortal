<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NextofkinResource extends JsonResource
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
            'name' => $this->name,
            'relationship' => $this->relationship,
            'office_address' => $this->office_address,
            'office_phone' => $this->office_phone,
            'home_address' => $this->home_address,
            'home_phone' => $this->home_phone,
        ];
    }
}
