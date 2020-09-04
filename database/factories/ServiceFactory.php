<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'category_id' =>  App\Category::all(['id'])->random(),
        'amount' => $faker->randomFloat($nbMaxDecimals = NULL,10, 70) // 48.8932
    ];
});
