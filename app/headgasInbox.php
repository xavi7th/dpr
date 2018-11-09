<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class headgasInbox extends Model
{
  protected $guarded = [];

  public function app_doc_review(){
    return $this->belongsTo(AppDocReview::class, 'application_id', 'id');
  }
}
