<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adoOutbox extends Model
{
    protected $guarded = [];

    public function app_doc_review(){
      return $this->belongsTo(AppDocReview::class, 'application_id', 'id');
    }
}
