<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuedAtcLicense extends Model
{
    protected $guarded = [];

    
    public function app_doc_rev(){
      return $this->belongsTo(AppDocReview::class, 'application_id', 'application_id');
    }
    
    public function company(){
      return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function job_assignment(){
      return $this-> belongsTo(JobAssignment::class, 'application_id', 'application_id');
    }
}
