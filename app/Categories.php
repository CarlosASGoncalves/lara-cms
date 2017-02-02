<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function jokes()
    {
        return $this->belongsToMany('App\Jokes', 'joke_category', 'category_id','joke_id');
    }
}
