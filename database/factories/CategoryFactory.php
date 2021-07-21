<?php

use Faker\Generator as Faker;
use App\Models\Category;
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'decription' => $faker->realText(100),
        'parent_id'  => 1,
        'menu' => 1,
    ];
});
