<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    /**
     * @var array
     */
    protected $fillable = [

        'name',
        'email',
        'created_at'

    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jokes()
    {
        return $this->hasMany('App\Jokes');
    }

}
