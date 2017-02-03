<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jokes extends Model
{

    protected $fillable = [

        'joketext',
        'jokedate',
        'author_id',

    ];

    // treat timestamp as Carbon instance
    protected $dates = ['jokedate'];

    public function scopePublished($query)
    {
        $query->where('jokedate', '<=', Carbon::now());
    }

    //for admin panel to managed unpublished jokes
    public function scopeUnpublished($query)
    {
        $query->where('jokedate', '>=', Carbon::now());
    }

    public function setJokedateAttribute($date)
    {
        $this->attributes['jokedate'] = Carbon::parse($date);
    }


    public function authors()
    {
        return $this->belongsTo('App\Authors');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categories', 'category_joke', 'joke_id', 'category_id');
    }

}
