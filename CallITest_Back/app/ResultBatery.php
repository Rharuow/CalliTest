<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultBatery extends Model
{

    public function batery()
    {
        return $this->belongsTo('App\Batery');
    }
}
