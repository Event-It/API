<?php

namespace App\Http\Resources\Announcement;

use Illuminate\Http\Resources\Json\JsonResource;
use App\announcement;
use App\event;

class AnnouncementResource extends JsonResource
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
          'event_name' => event::find($this->id)->event_name,
          'announcement_heading' => $this->announcement_heading,
          'announcement_text' => $this->announcement_text,
        ];
    }
}
