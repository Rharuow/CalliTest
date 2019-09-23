<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TryBatery extends Model
{

    public function resultTryBateries()
    {
        return $this->hasMany('App\ResultTryBatery');
    }

    public function batery()
    {
        return $this->belongsTo('App\Batery');
    }
}
