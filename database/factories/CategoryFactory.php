<?php

use Faker\Generator as Faker;


$factory->define(App\Category::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->company,
        'description' => $faker->unique()->realText($maxNbChars = 11, $indexSize = 1),
        'user_id' => factory(App\User::class)->create()->id
    ];
});
