<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $guarded = [];

	public function user()
	{
		return $this->belongsTo(Staff::class, 'marketer_id', 'staff_id');
	}
}
