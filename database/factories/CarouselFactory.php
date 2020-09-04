<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carousel;
use Faker\Generator as Faker;

$factory->define(Carousel::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl($width = 620, $height = 600),
        'alt' => $faker->sentence(),
    ];
});
