<?php

use Faker\Generator as Faker;

$factory->define(App\Retail::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'user_id' => 1,
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->text(800),
        'location' => $faker->text(100),
        'status' => $faker->randomElement(['PUBLICADO', 'BORRADOR'])
    ];
});
