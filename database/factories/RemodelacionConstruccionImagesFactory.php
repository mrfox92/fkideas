<?php

use Faker\Generator as Faker;

$factory->define(App\RemodelacionConstruccionImages::class, function (Faker $faker) {
    $name = $faker->sentence(5);
    return [
        'remodelacion_id' => rand(1, 20),
        'name'  =>  $name,
        'path'  => $faker->imageUrl($width = 1200, $height = 650)
    ];
});
