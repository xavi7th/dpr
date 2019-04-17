<?php

namespace App;

use App\Staff;
use App\AppDocReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserNotification extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'recipient_id',
		'notification',
		'sender_name',
		'application_id'
	];

	public function user()
	{
		return $this->hasMany(Staff::class, 'staff_id');
	}

	public function app_doc_review()
	{
		return $this->belongsTo(AppDocReview::class, 'application_id');
	}
}
