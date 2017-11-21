<?php

use Faker\Generator as Faker;

$factory->define(App\ProductReview::class, function (Faker $faker) {
    return [
        'review' => $faker->paragraph($faker->numberBetween(5,8))
    ];
});
