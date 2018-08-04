<?php

use Faker\Generator as Faker;

$factory->define(App\Form::class, function (Faker $faker) {
    return [
    'first name' => $faker->text(20),
    'last name' => $faker->text(20),
    'email' => $faker->text(50),
    'subject' => $faker->text(80),
    'description' => $faker->text(250)

    ];
});
