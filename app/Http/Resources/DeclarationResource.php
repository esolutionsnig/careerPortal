<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeclarationResource extends JsonResource
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
            'signature' => $this->signature,
            'date' => $this->date,
            'witness_name' => $this->witness_name,
            'witness_phone_number' => $this->witness_phone_number,
            'witness_date' => $this->witness_date,
        ];
    }
}
