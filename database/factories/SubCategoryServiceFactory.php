<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubCategoryService;
use Faker\Generator as Faker;


$factory->define(SubCategoryService::class, function (Faker $faker) {
    return [
        'category_id' => App\Category::all(['id']) ->random(),
        'title' => $faker->sentence(),
        'order' =>  $faker->randomDigit()
    ];
});