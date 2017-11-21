<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words($faker->numberBetween(2,4), true)
    ];
});
