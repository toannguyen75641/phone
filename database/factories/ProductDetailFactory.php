<?php

use Faker\Generator as Faker;

$factory->define(App\ProductDetail::class, function (Faker $faker) {
    return [
        'product_id' => function() {
        	return factory(App\Product::inRandomOrder()->first()->id);
        },
        'feature' => $faker->text,
        'screen' => $faker->sentence(6),
        'camera' => $faker->sentence(6),
        'ram' => $faker->sentence(6),
        'rom' => $faker->sentence(6),
        'weight' => $faker->sentence(6),
        'battery' => $faker->sentence(6)
    ];
});
