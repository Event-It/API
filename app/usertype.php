<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    public function users() {
      return $this->belongsToMany(user::class)->withPivot('user_email','user_password','user_usertype_is_active')->withTimestamps();
    }
}
