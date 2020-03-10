<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Post,User};
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(5),
        'likes' => $faker->numberBetween($min = 10, $max = 101),
    ];
});
