<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['DISEÑO WEB', 'SERVIDORES', 'MYSQL', 'DEEP LEARNING', 'BIGDATA', 'AMAZON WEB SERVICES']),
	    'description' => $faker->sentence
    ];
});
