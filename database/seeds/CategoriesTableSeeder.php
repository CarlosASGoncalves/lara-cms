<?php

use Illuminate\Database\Seeder;

Class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        factory('App\Categories', 5)->create();
    }

}