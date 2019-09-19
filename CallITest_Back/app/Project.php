<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    function animal() {
        return $this->belongsToMany('App\Animal', 'animal_project');
    }
}
