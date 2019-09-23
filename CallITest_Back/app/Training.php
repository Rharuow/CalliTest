<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

    public function resultTrainings() {
        return $this->hasMany('App\ResultTraining');
    }

    public function tryTrainings() {
        return $this->hasMany('App\TryTraining');
    }

    public function test()
    {
        return $this->belongsTo('App\Test');
    }
}
