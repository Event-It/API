<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    public function events() {
      return $this->belongsTo(event::class);
    }
}
