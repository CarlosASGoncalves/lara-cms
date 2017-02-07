<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryJoke extends Model
{
    protected $table = "category_joke";

    protected $fillable = [

        'category_id',
        'joke_id'

    ];
}
