<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasktag extends Model
{
    public function events() {
      return $this->belongsTo(event::class);
    }

    public function users() {
      return $this->belongsToMany(user::class)->withPivot('task_heading','task_description','task_due_date','task_status','task_priority','task_is_active')->withTimestamps();
    }
}
