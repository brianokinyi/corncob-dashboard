<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Farmer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => 254791666364,
        'county' => 'Narok',
        'subcounty' => 'Narok South'
    ];
});
