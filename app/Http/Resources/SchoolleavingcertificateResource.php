<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchoolleavingcertificateResource extends JsonResource
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
            'school' => $this->school,
            'year' => $this->year,
            'result_1' => $this->result_1,
            'result_2' => $this->result_2,
            'result_3' => $this->result_3,
            'result_4' => $this->result_4,
            'result_5' => $this->result_5,
        ];
    }
}
