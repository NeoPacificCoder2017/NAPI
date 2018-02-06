<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class NewResource extends Resource
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
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'categorie' => $this->categorie,
            'content' => $this->content,
            'picture' => $this->picture,
            'created_at' => $this->created_at,
        ];
    }
}
