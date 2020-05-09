<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'street' => $faker->streetName,
        'house_number' => $faker->numberBetween(1, 150),
        'city' => $faker->city,
        'postcode' => $faker->numberBetween(1000, 9999),
        'country_id' => $faker->numberBetween(1, 239),
    ];
});
