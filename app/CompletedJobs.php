<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompletedJobs extends Model
{
    protected $guarded = [];

    public function app_doc_review()
    {
        return $this->belongsTo(AppDocReview::class, 'application_id', 'id');
    }
}
