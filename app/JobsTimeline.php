<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AppDocReview;

class JobsTimeline extends Model
{
    protected $guarded = [];

    protected $dates = ['created_at'];

    public function app_doc_rev(){
      return $this->hasOne(AppDocReview::class, 'application_id', 'application_id');
    }

    public function job_assignment(){
      return $this->hasOne(JobAssignment::class, 'application_id', 'application_id');
    }
}
