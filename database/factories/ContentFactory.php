<?php

use Faker\Generator as Faker;

$factory->define(App\Content::class, function (Faker $faker) {
    return [
        'month' => $faker->date($format = 'm', $max = 'now'),
        'opening_estimation' => $faker->date($format = 'Y-M-d'),
        'store_location' => $faker->address,
        'store_owner' => $faker->name,
        'h_44' => $faker->date($format = 'd-M'),
        'h_32' => $faker->date($format = 'd-M'),
        'h_22' => $faker->date($format = 'd-M'),
        'h_21' => $faker->date($format = 'd-M'),
        'h_8' => $faker->date($format = 'd-M'),
        'h_3' => $faker->date($format = 'd-M'),
        'h_2' => $faker->date($format = 'd-M'),
        'h' => $faker->date($format = 'd-M'),
        'additional_info' => $faker->sentence,
        'updating' => '0',
        'accountability' => $faker->name
    ];
});
