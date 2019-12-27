<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articels;
use Faker\Generator as Faker;

$factory->define(Articels::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'body' => $faker->text(250),
    ];
});
