<?php

use Faker\Generator as Faker;

$factory->define(App\PortfolioImage::class, function (Faker $faker) {
    $photo_ids = [997, 975, 982, 984, 958, 957, 940, 844, 798];


    $pid = rand(0, count($photo_ids) -1);

    return [
        'path' => 'https://picsum.photos/1650/1050?image=' . $photo_ids[$pid],
        'alt' => $faker->word
    ];
});
