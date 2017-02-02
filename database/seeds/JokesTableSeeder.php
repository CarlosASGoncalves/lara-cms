<?php

use Illuminate\Database\Seeder;

class JokesTableSeeder extends Seeder {

    public function run()
    {
        factory('App\Jokes', 5)->create();
    }
}