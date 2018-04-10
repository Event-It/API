<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subevent extends Model
{
    public function events() {
      return $this->belongsTo(events::class);
    }

    public function eventtypes() {
      return $this->belongsTo(eventtypes::class);
    }

    public function ticketdescriptions() {
      return $this->morphMany(ticketdescription::class,'ticketdescriptionable');
    }
}
