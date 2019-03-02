<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Sale::class, function (Faker $faker) {
    return [
        'farmer_id' => function() {
            return App\Models\Farmer::inRandomOrder()->first()->id;
        },
        'no_of_bags' => $faker->randomDigitNotNull,
        'county' => $faker->randomElement([
            'Narok',
            'Nakuru',
            'Trans Nzoia',
            'Kitale'
        ]),
        'subcounty' => $faker->randomElement([
            'narok',
            'nakuru',
            'Trans Nzoia',
            'Kitale'
        ]),
        'price_per_bag' => $faker->randomNumber(4)
    ];
});
