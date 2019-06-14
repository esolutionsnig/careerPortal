<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DependantResource extends JsonResource
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
            'dependant_name' => $this->dependant_name,
            'relationship' => $this->relationship,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
        ];
    }
}
