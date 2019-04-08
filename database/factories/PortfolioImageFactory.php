<?php

use Faker\Generator as Faker;

$factory->define(App\PortfolioImage::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(550, 350, 'cats'),
        'alt' => $faker->word
    ];
});
