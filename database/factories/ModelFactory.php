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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Recipient::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'name' => $faker->name,
        'company' => $faker->name,
        'address' => $faker->address,
        'telephone' => $faker->phoneNumber,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
        'user_id' => 1,

    ];
});