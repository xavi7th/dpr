<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressureTestRecords extends Model
{
    protected $guarded = [];

    public function job_assignment(){
      return $this->hasOne(JobAssignment::class, 'application_id', 'application_id');
    }
}
