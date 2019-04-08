<?php

use Faker\Generator as Faker;

$factory->define(App\Portfolio::class, function (Faker $faker) {
    $title = $faker->word . ' ' . $faker->word . ' ' . $faker->word;

    return [
        'title' => $title,
        'slug' => strtolower(str_replace(' ', '-', $title)),
        'description' => $faker->text
    ];
});
