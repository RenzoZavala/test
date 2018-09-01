<?php

use Faker\Generator as Faker;

$factory->define(App\Sede::class, function (Faker $faker) {
    return [
        'sede_name' => $faker->name,
        'cantidad' => $faker->month,
    ];
});
