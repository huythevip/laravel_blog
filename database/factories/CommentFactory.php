<?php

use Faker\Generator as Faker;


$factory->define(App\Comment::class, function (Faker $faker) {
    return [
    	'content' => $faker->sentence,
    	'post_id' => $faker->numberBetween(0, 99),
    ];
});
