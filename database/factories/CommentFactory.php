<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'message' => $faker->text($maxNbChars = 200),
        'user_id' => $faker->numberBetween(1, 50),
        'product_id' => $faker->numberBetween(1, 50)
    ];
});
