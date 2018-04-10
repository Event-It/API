<?php

use Faker\Generator as Faker;

$factory->define(App\user::class, function (Faker $faker) {
    return [
      'user_first_name' => $faker->firstName,
      'user_last_name' => $faker->lastName,
      'user_phone_number' => $faker->numberBetween(8504476351,9999999999),
      'user_aadhar_card_number' => $faker->numberBetween(100000000000,999999999999),
      'user_profile_picture' => $faker->text(50),
      'user_about' => $faker->text(20),
      'user_residence' => $faker->streetAddress,
      'user_city' => $faker->city,
      'user_country' => $faker->text(25),
      'user_is_active' => $faker->randomElement(array(0,1))
    ];
});
