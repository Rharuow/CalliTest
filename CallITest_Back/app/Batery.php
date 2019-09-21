<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batery extends Model
{

    public function resultBatery() {
        return $this->hasMany('App\ResultBatery');
    }

    public function test()
    {
        return $this->belongsTo('App\Test');
    }
}
