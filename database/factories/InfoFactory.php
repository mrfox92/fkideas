<?php

use Faker\Generator as Faker;

$factory->define(App\Info::class, function (Faker $faker) {
    $title = $faker->sentence(1);
    return [
        'user_id' => 1,
        'title' => $title,
        'description' => $faker->text(120),
        'email' => $faker->unique()->safeEmail,
        'mobile_number' => '56912345678',
        'phone_number' => '0224213146',
        'location' => $faker->text(100),

    ];
});
