<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => function() {
            return App\Category::inRandomOrder()->first()->id;
        },
        'price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 10),
        'quantity' => $faker->numberBetween($min = 1, $max = 100),
        'description' => $faker->text,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ];
});
