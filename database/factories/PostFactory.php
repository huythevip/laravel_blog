<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->paragraph,
        // 'id' => function () {
        //     return factory(App\Post::class)->create()->id;
    ];
});
