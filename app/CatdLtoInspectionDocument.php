<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatdLtoInspectionDocument extends Model
{
    protected $guarded = [];

    public function catdLtoApplicationExtention(){
        return $this->belongsTo(CatdLtoApplicationExtention::class, 'application_id', 'application_id');
    }
}
