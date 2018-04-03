<?php

use Faker\Generator as Faker;
use App\Model\User;

$factory->define(App\Model\UserAuthentication::class, function (Faker $faker) {
    return [
      'user_id' => $faker->unique()->randomElement(User::all()->pluck('user_id')->toArray()),
      'user_type_id' => $faker->randomElement(array(2,3)),
      'user_email' => $faker->unique()->freeEmail,
      'user_password' => $faker->numberBetween(1000,9999),
      'user_auth_is_active' => $faker->randomElement(array(0,1))
  ];
});
