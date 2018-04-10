<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ticketdescription_user extends Pivot {

    public function transactions() {
      return $this->belongsTo(transactions::class);
    }

    public function tickets() {
      return $this->hasMany(ticket::class);
    }

    public function checkins() {
      return $this->hasMany(checkins::class);
    }

    public function checkouts() {
      return $this->hasMany(checkouts::class);
    }

    public function ticketdescriptions() {
      return $this->belongsTo(ticketdescription::class);
    }

    public function users() {
      return $this->belongsTo(user::class);
    }
}
