<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $primaryKey = "user_type_id";
    
    public function UserAuthentication() {
      return $this->hasMany(UserAuthentication::class);
    }
}
