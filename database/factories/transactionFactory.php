<?php

use Faker\Generator as Faker;

$factory->define(App\transaction::class, function (Faker $faker) {
    return [
      'transaction_datetime' => $faker->dateTimeBetween('-10 days', '0 days', 'IST'),
      'transaction_amount' => $faker->numberBetween(1,10),
      'transaction_mode' => $faker->text(20),
      'transaction_reference_number' => $faker->text(20),
    ];
});
