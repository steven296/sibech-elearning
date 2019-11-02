<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'tema_id' => \App\Tema::all()->random()->id,
        'name'=>$faker->name,
        'description'=>$faker->text(),
        'video'=>$faker->imageUrl($width = 640, $height = 480)
    ];
});
