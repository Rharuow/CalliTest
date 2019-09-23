<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'code',
        'marking',
        'cage',
        'birthday',
        'sex',
        'obs'
    ];

    function project() {
        return $this->belongsToMany('App\Project', 'animal_project');
    }

}
