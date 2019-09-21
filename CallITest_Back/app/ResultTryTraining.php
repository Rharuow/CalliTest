<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultTryTraining extends Model
{
    public function tryTraining()
    {
        return $this->belongsTo('App\TryTraining');
    }
}
