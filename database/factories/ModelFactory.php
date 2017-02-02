<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [

        'name' => $faker->name,

        'email' => $faker->safeEmail,

        'password' => bcrypt(str_random(10)),

        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Jokes::class, function (Faker\Generator $faker) {
    return [

        'joketext' => $faker->paragraph,

        'jokedate' => $faker->dateTime(),

        'author_id' => random_int(1, 3),

    ];
});

$factory->define(App\Categories::class, function (Faker\Generator $faker) {
    return [

        'name' => $faker->name,

    ];
});

$factory->define(App\Authors::class, function (Faker\Generator $faker) {
    return [

        'name' => $faker->name,

        'email' => $faker->safeEmail,

    ];
});