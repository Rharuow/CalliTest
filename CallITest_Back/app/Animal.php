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

    function projects() {
        return $this->belongsToMany('App\Project', 'ani_pro');
    }

}
