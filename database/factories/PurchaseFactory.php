<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Purchase::class, function (Faker $faker) {
    $sale_id = App\Models\Sale::inRandomOrder()->first()->id;

    $no_of_bags = App\Models\Sale::findOrFail($sale_id)->first()->no_of_bags;
    $price_per_bag = App\Models\Sale::findOrFail($sale_id)->first()->price_per_bag;
    $total_price = (int)$no_of_bags * (int)$price_per_bag;

    return [
        'sale_id' => $sale_id,
        'no_of_bags' => $no_of_bags,
        'price_per_bag' => $price_per_bag,
        'total_price' => $total_price
    ];
});
