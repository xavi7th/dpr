<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppDocReview extends Model
{
    protected $guarded = [];

    protected $dates = ['created_at'];

    public function staff(){
      return $this->belongsTo(Staff::class);
    }
    public function job_assignment(){
      return $this->hasOne(JobAssignment::class, 'application_id', 'application_id');
    }
}
