<?php

namespace App;

use App\UserNotification;
use Illuminate\Database\Eloquent\Model;

class AppDocReview extends Model
{
	protected $guarded = [];

	protected $dates = ['created_at'];

	public function staff()
	{
		return $this->belongsTo(Staff::class);
	}

	public function marketer()
	{
		return $this->belongsTo(Staff::class, 'marketer_id', 'staff_id');
	}

	public function notifications()
	{
		return $this->hasMany(UserNotification::class, 'application_id');
	}

	public function job_assignment()
	{
		return $this->hasOne(JobAssignment::class, 'application_id', 'application_id');
	}

	public function issued_lto_licenses()
	{
		return $this->hasOne(IssuedLtoLicense::class, 'application_id', 'application_id');
	}

	public function issued_atc_licenses()
	{
		return $this->hasOne(IssuedAtcLicense::class, 'application_id', 'application_id');
	}

	public function company()
	{
		return $this->belongsTo(Company::class, 'company_id', 'company_id');
	}

	public function is_under_review()
	{
		return starts_with($this->application_status, 'M.R. ');
	}

	// /**
  //    * Get the user's first name.
  //    *
  //    * @param  string  $value
  //    * @return string
  //    */
  //   public function getFirstNameAttribute($value)
  //   {
  //       return ucfirst($value);
  //   }
}
