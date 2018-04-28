<?php

namespace App\Http\Resources\SubEvent;

use Illuminate\Http\Resources\Json\JsonResource;
use App\user;
use App\event;

class SubEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return[
        'subevent_id' => $this->id,
        'subevent_name' => $this->subevent_name,
        'subevent_description' => $this->subevent_description,
        'subevent_venue' => $this->subevent_venue,
        'subevent_start_time' => $this->subevent_start_time,
        'subevent_end_time' => $this->subevent_end_time,
        'subevent_thumbnail_photo' => $this->subevent_thumbnail_photo,
        'subevent_banner_photo' => $this->subevent_banner_photo,
        'subevent_security_option' => $this->subevent_security_option,
        'event_id' => $this->event_id,
        'event_name' => event::find($this->event_id)->event_name,
        'eventtype_id' => $this->eventtype_id,
        'user_id' => event::find($this->event_id)->user_id,
        'organizer_name' => user::find(event::find($this->event_id)->user_id)->user_first_name." ".user::find(event::find($this->event_id)->user_id)->user_last_name
      ];
    }
}
