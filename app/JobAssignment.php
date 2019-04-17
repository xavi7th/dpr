<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobAssignment extends Model
{
    protected $guarded = [];

    public function application_comments(){
      return $this->hasMany(ApplicationComments::class, 'application_id', 'application_id');
    }

    public function assigned_staff(){
      return $this->hasOne(Staff::class, 'staff_id', 'staff_id');
    }
}
