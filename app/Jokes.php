<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jokes extends Model
{
    public function authors()
    {
        return $this->belongsTo('App\Authors');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categories', 'category_joke', 'joke_id', 'category_id');
    }
}
