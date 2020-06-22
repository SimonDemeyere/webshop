<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'category_id' => $faker->numberBetween(1, 4),
        'description' => $faker->text($maxNbChars = 300),
        'short_description' => $faker->text($maxNbChars = 50),
        'price' => $faker->numberBetween(1, 9000),
//        'comment_id' => $faker->numberBetween(1, 1000),
    ];
});
