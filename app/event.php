<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public function users() {
      return $this->belongsTo(user::class);
    }

    public function eventtypes() {
      return $this->belongsTo(eventtype::class);
    }

    public function subevents() {
      return $this->hasMany(subevent::class);
    }

    public function announcements() {
      return $this->hasMany(announcement::class);
    }

    public function member() {
      return $this->belongsToMany(user::class,'member','user_id','event_id')->withTimestamps();
    }

    public function tasktags() {
      return $this->hasMany(tasktag::class);
    }

    public function ticketdescriptions() {
      return $this->morphMany(ticketdescription::class,'ticketdescriptionable');
    }
}
