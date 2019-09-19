<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'name',
        'psw',
        'sex',
        'temporaryToken'
    ];

    public function project()
    {
        return $this->hasMany('App\Project');
    }

    public function member()
    {
        return $this->hasMany('App\Member');
    }

}
