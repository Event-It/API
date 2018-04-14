<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
  protected $fillable = [
		'event_name','event_start_time','event_end_time','event_country',
    'event_venue','event_city','event_description','event_video_link',
    'event_website','event_thumbnail_photo','event_banner_photo','event_status',
    'event_security_option','event_has_sub_event','event_is_active'
	];

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
