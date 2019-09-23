<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TryTraining extends Model
{

    public function resultTryTrainings() {
        return $this->hasMany('App\ResultTryTraining');
    }

    public function training()
    {
        return $this->belongsTo('App\Training');
    }
}