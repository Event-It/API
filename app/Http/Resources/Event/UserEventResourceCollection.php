<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Resources\Json\Resource;

class UserEventResourceCollection extends Resource
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
              'event_id' => $this->id,
              'event_name' => $this->event_name,
              'event_description' => $this->event_description,
              'event_venue' => $this->event_venue,
              'event_city' => $this->event_city,
              'event_start_time' => $this->event_start_time
        ];
    }
}
