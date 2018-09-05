<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppDocReview extends Model
{
    protected $guarded = [];

    public function staff(){
      return $this->belongsTo(Staff::class);
    }
}
