<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    public function bateries() {
        return $this->hasMany('App\Batery');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
