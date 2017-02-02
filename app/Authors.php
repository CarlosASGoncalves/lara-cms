<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{

    protected $fillable = [

        'name',
        'email',
        'created_at'

    ];

    public function jokes()
    {
        return $this->hasMany('App\Jokes');
    }

}
