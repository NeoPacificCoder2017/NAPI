<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
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
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            'pseudo' => $this->pseudo,
            'profile_type_id' => $this->profile_type_id,
            'birthday' => $this->birthday,
            'email' => $this->email,
            'created_at' => $this->created_at,
        ];
    }
}
