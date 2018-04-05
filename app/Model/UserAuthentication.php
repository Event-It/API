<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAuthentication extends Model
{
    protected $primaryKey = array('user_id','user_type_id');
    
    public function User() {
      return $this->belongsTo(User::class);
    }

    public function UserType() {
      return $this->belongsTo(UserType::class);
    }
}
