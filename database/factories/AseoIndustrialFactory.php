<?php

use Faker\Generator as Faker;

$factory->define(App\AseoIndustrial::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'user_id' => rand(1, 3),
        'title' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(280),
        'description' => $faker->text(800),
        'location' => $faker->text(100),
        'status' => $faker->randomElement(['PUBLICADO', 'BORRADOR']),
        'file' => $faker->imageUrl( $width = 1200, $height = 550 )
    ];
});
