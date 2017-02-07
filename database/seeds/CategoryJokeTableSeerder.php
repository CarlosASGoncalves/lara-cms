<?php

use Illuminate\Database\Seeder;

class CategoryJokeTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\CategoryJoke', 2)->create();
    }
}
