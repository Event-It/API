<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventtype extends Model
{
    public function events() {
      return $this->hasMany(events::class);
    }

    public function subevents() {
      return $this->hasMany(subevents::class);
    }
}
