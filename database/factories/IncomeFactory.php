<?php

use Faker\Generator as Faker;


$factory->define(App\Income::class, function (Faker $faker) {
    static $password;

    return [
        'category_id' => factory(App\Category::class)->create()->id,
        'user_id' => $faker->randomDigitNotNull,
        'cents' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'description' => $faker->realText($maxNbChars = 20, $indexSize = 2)
    ];
});