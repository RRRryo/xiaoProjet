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


$factory->define(App\Sender::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'name' => $faker->name,
        'company' => $faker->name,
        'address' => $faker->address,
        'telephone' => $faker->phoneNumber,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
        'note' => $faker->text,
        'email' => $faker->email,
        'user_id' => 1,
    ];
});


$factory->define(App\Balance::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'amount' => $faker->randomDigit,
        'description' => $faker->title,
        'user_id' => 1,
    ];
});


$factory->define(App\Order::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'sender_name' => $faker->name,
        'sender_email' => $faker->email,
        'sender_address' => $faker->address,
        'sender_postal_code' => $faker->postcode,
        'sender_city' => $faker->city,
        'sender_country' => $faker->country,
        'sender_tel' => $faker->phoneNumber,

        'recipient_name' => $faker->name,
        'recipient_email' => $faker->email,
        'recipient_address' => $faker->address,
        'recipient_postal_code' => $faker->postcode,
        'recipient_city' => $faker->city,
        'recipient_country' => $faker->country,
        'recipient_tel' => $faker->phoneNumber,

        'real_weight' => $faker->numberBetween(0,12),
        'length' => $faker->numberBetween(5,100),
        'width' => $faker->numberBetween(5,100),
        'height' => $faker->numberBetween(5,100),
        'type_colis' => $faker->name,
        'dim_weight' => $faker->numberBetween(5,100),
        'buy_weight' => $faker->numberBetween(5,100),
        'insurance' => $faker->boolean(50),
        'insurance_amount' => $faker->randomFloat(10,0,999),

        'amount' => $faker->randomFloat(10,0,999),
        'status' => $faker->numberBetween(0,5),
        'code' => $faker->name,

        'user_id' => 1,
    ];
});


$factory->define(App\OrderItem::class, function (Faker\Generator $faker)  use ($factory) {
    return [
        'name' => $faker->name,
        'weight' => $faker->numberBetween(0,12),
        'quantity' => $faker->numberBetween(0,5),
        'value' => $faker->randomFloat(10,0,999),
        'origin' => $faker->country,

        'order_id' => $faker->numberBetween(0,40),
    ];
});