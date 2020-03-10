<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Post_image,Post};
use Faker\Generator as Faker;

$factory->define(Post_image::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl($width = 223, $height = 149 ,'cats'),
        'post_id' =>Post::inRandomOrder()->first()->id,
    ];
});
