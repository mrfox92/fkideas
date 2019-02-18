<?php

use Faker\Generator as Faker;

$factory->define(App\Retail::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'user_id' => rand(1, 3),
        'title' => $title,
        'description' => $faker->text(800),
        'location' => $faker->text(100),
        'status' => $faker->randomElement(['PUBLICADO', 'BORRADOR']),
        'file' => $faker->imageUrl( $width = 1200, $height = 550 ),
    ];
});
