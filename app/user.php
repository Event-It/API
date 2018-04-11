<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  protected $fillable = [
		'user_first_name','user_last_name' ,'user_phone_number','user_aadhar_card_number','user_profile_picture','user_about','user_residence','user_city','user_country','user_is_active'
	];
    public function usertypes() {
      return $this->belongsToMany(usertype::class)->withPivot('user_email','user_password','user_usertype_is_active')->withTimestamps();
    }

    public function events() {
      return $this->hasMany(event::class);
    }

    public function ticketdescriptions() {
      return $this->belongsToMany(ticketdescription::class)->withPivot('ticket_quantity','ticket_purchasedate','transaction_id','ticketdescription_user_is_active')->withTimestamps();
    }

    public function member() {
      return $this->belongsToMany(event::class,'member','event_id','user_id')->withTimestamps();
    }

    public function tasktags() {
      return $this->belongsToMany(tasktag::class)->withPivot('task_heading','task_description','task_due_date','task_status','task_priority','task_is_active')->withTimestamps();
    }
}
