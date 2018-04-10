<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
  public function ticketdescription_user() {
    return $this->belongsTo(ticketdescription_user::class);
  }
}
