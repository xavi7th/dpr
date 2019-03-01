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

    public function issued_lto_licenses(){
      return $this->hasOne(IssuedLtoLicense::class, 'application_id', 'application_id');
    }

    public function issued_atc_licenses(){
      return $this->hasOne(IssuedAtcLicense::class, 'application_id', 'application_id');
    }

    public function company(){
      return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }
}
