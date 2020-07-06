<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Achievement;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Achievement::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'name' => $faker->name,
    ];
});
