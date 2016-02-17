<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Learn\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'username'       => $faker->lastName,
        'email'          => $faker->email,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Learn\Project::class, function (Faker\Generator $faker) {
    return [
        'title'       => $faker->city,
        'youtubeID'   => $faker->randomElement(['yxeKGzW-BFs', '7TF00hJI78Y', 'gqOEoUR5RHg', 'fju9ii8YsGs', 'gqOEoUR5RHg']),
        'user_id'     => $faker->numberBetween(1, 20),
        'category'    => "Programming",
        'description' => $faker->sentence(40),
    ];
});
