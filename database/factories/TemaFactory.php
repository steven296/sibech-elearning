<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tema;
use Faker\Generator as Faker;

$factory->define(Tema::class, function (Faker $faker) {
    return [
        'course_id' => \App\Course::all()->random()->id,
        'name'=>$faker->name()
    ];
});
