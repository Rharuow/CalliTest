<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    public function bateries() {
        return $this->hasMany('App\Batery');
    }

    public function trainings() {
        return $this->hasMany('App\Training');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
