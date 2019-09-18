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

    public function members()
    {
        return $this->hasMany('App\Member');
    }

}
