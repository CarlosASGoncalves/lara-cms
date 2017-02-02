<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\Authors', 2)->create();
    }
}