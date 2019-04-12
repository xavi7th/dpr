<?php

namespace App;

use App\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserNotification extends Model
{
	use SoftDeletes;

	public function user()
	{
		return $this->hasMany(Staff::class, 'staff_id');
	}
}
