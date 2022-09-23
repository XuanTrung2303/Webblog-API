<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return[
        'name_customer' => $faker->firstName,
        'phone_customer' => $faker->phoneNumber,
        'address_customer' => $faker->address,
        'email_customer' => $faker->unique()->safeEmail,
        'city_customer' => $faker->city
    ];
});
