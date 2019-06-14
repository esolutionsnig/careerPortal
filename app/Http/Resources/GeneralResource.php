<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GeneralResource extends JsonResource
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
            'computer_literacy' => $this->computer_literacy,
            'competence_profile' => $this->competence_profile,
            'personal_traits' => $this->personal_traits,
        ];
    }
}
