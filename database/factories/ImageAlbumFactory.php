<?php

use Faker\Generator as Faker;

$factory->define(App\ImageAlbum::class, function (Faker $faker) {
    return [
        'product_id' => function() {
            return factory(App\Product::inRandomOrder()->first()->id);
        },
        'image1' => $faker->imageUrl($width = 640, $height = 480),
        'image2' => $faker->imageUrl($width = 640, $height = 480),
        'image3' => $faker->imageUrl($width = 640, $height = 480),
        'image4' => $faker->imageUrl($width = 640, $height = 480)
    ];
});