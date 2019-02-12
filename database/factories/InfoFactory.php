<?php

use Faker\Generator as Faker;

$factory->define(App\Info::class, function (Faker $faker) {
    $title = $faker->sentence(1);
    return [
        'user_id' => rand(1, 3),
        'title' => $title,
        'slug' => str_slug( $title ),
        'description' => $faker->text(120),
        'email' => $faker->unique()->safeEmail,
        'contact_number' => '+569 12345678',
        'location' => $faker->text(100),

    ];
});
