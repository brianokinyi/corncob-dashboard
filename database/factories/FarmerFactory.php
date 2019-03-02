<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Farmer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => 791666364
    ];
});
