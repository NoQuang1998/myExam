<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use App\Categories;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    $category_id = Categories::pluck('id');
    return [
        'name' => $faker->name(),
        'description' => 'text content categories',
        'content' => 'content cate',
        'category_id' => $faker->randomElement($category_id),
    ];
});
