<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;
use App\SubCategoryService;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'sub_category_services_id' =>  App\SubCategoryService::all(['id'])->random(),
        'amount' => $faker->randomFloat($nbMaxDecimals = NULL,10, 70) // 48.8932
    ];
});
