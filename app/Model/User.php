<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_id";
    //public $incrementing = false;

    public function UserAuthentication() {
        return $this->hasMany(UserAuthentication::class);
    }
}
?>
