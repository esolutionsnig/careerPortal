<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'surname' => $this->name,
            'firstname' => $this->firstname,
            'othernames' => $this->othernames,
            'email' => $this->email,
            'href' => [
                'link' => route('users.show', $this->id)
            ]
        ];
    }
}
