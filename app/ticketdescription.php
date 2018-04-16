<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
  'event' => 'App\event',
  'subevent' => 'App\subevent',
]);

class ticketdescription extends Model
{
  protected $fillable = array('ticket_type', 'ticket_price' ,'available_tickets','sold_tickets','ticketdescriptionable_id','ticketdescriptionable_type');

    public function ticketdescriptionable() {
      return $this->morphTo();
    }

    public function users() {
      return $this->belongsToMany(users::class)->withPivot('ticket_quantity','ticket_purchasedate','transaction_id','ticketdescription_user_is_active')->withTimestamps();
    }
}
