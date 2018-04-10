<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function ticketdescription_user() {
      return $this->hasMany(ticketdescription_user::class);
    }
}
