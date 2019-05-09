<?php

namespace App;

use App\AppDocReview;
use Illuminate\Database\Eloquent\Model;

class LocalGovt extends Model
{
	public function app_doc_reviews()
	{
		return $this->hasMany(AppDocReview::class);
	}
}
