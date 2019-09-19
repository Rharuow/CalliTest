<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function administrators()
    {
        return $this->belongsTo('App\Administrator');
    }

    function animal() {
        return $this->belongsToMany('App\Animal', 'animal_project');
    }

    function member() {
        return $this->belongsToMany('App\Member', 'project_member');
    }
}