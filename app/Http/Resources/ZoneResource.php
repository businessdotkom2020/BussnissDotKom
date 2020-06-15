<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResource extends JsonResource
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
            'id'           => $this->id,
            'name'           => $this->name,
            'image'       => url('storage/'.$this->image),
            'zone_name'       => $this->state ? $this->state->name : null ,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
    
        ];
    }
}
