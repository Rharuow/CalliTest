<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultTraining extends Model
{
    public function training()
    {
        return $this->belongsTo('App\Training');
    }
}
