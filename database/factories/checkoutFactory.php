<?php

use Faker\Generator as Faker;

$factory->define(App\checkout::class, function (Faker $faker) {
    return [
      'ticketdescription_user_id' => $faker->randomElement(DB::table('ticketdescription_user')->get()->pluck('id')->toArray()),
      'number_of_person' => $faker->numberBetween(1,10),
      'checkout_is_active' => $faker->randomElement(array(0,1)),
    ];
});
