<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function administrators()
    {
        return $this->belongsTo('App\Administrator');
    }
}
