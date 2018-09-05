<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    protected $guarded = [];

    public function appDocReviews(){
      return $this->hasMany(AppDocReview::class);
    }

}
