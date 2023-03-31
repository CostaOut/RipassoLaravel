<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BoyfriendResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        return [
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "birthday" => $this->birthday, 
            "available" => $this->available,
            "height" => $this->height, 
            "user" => $this->user->name
        ];
    }
}
