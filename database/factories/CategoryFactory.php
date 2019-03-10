<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ];
});
