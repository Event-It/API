<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Resources\Json\JsonResource;
use App\user;

class EventResource extends JsonResource
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
          'event_id' => $this->id,
          'event_name' => $this->event_name,
          'event_description' => $this->event_description,
          'event_venue' => $this->event_venue,
          'event_city' => $this->event_city,
          'event_country' => $this->event_country,
          'event_start_time' => $this->event_start_time,
          'event_end_time' => $this->event_end_time,
          'event_website' => $this->event_website,
          'event_video_link' => $this->event_video_link,
          'event_thumbnail_photo' => $this->event_thumbnail_photo,
          'event_banner_photo' => $this->event_banner_photo,
          'event_status' => $this->event_status,
          'event_security_option' => $this->event_security_option,
          'event_has_sub_event' => $this->event_has_sub_event,
          'user_id' => $this->user_id,
          'organizer_name' => user::find($this->user_id)->user_first_name." ".user::find($this->user_id)->user_last_name 
        ];
    }
}
