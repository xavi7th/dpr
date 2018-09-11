<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobAssignment extends Model
{
    protected $guarded = [];

    public function application_comments(){
      return $this->hasMany(ApplicationComments::class, 'application_id', 'application_id');
    }
}
