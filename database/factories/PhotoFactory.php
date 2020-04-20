<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
//        'src' => $faker->image('public/assets/images', 640, 480, null, false),z
    ];
});
