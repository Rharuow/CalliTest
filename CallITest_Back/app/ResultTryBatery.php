<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultTryBatery extends Model
{
    public function tryBateries()
    {
        return $this->belongsTo('App\TryBatery');
    }
}
