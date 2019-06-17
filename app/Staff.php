<?php

namespace App;

use App\Company;
use App\UserNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
	protected $guarded = [];

	protected $casts = [
		'activated' => 'boolean'
	];

	public function appDocReviews()
	{
		return $this->hasMany(AppDocReview::class, 'marketer_id', 'staff_id');
	}

	public function received_notifications()
	{
		return $this->hasMany(UserNotification::class, 'recipient_id')->latest();
	}

	public function new_notifications()
	{
		return $this->received_notifications()->where('is_read', false);
	}

	public function sent_notifications()
	{
		return $this->hasMany(UserNotification::class, 'sender_id')->latest();
	}

	public function companies()
	{
		return $this->hasMany(Company::class, 'marketer_id', 'staff_id')->latest();
	}
}
