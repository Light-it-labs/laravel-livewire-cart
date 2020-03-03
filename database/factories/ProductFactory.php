<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->words(10),
        'price' => $faker->randomFloat(50, 100)
    ];
});
