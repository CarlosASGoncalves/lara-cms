<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function jokes()
    {
        return $this->hasMany('App\Jokes');
    }

}
