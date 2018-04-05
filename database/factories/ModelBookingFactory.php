<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Booking::class, function (Faker $faker) {
    return [
      'ticket_desc_id' => $faker->randomElement(DB::table('ticket_descriptions')->get()->pluck('ticket_desc_id')->toArray()),
      'ticket_buyer_id' => $faker->randomElement(DB::table('user_authentications')->where('user_type_id',3)->get()->pluck('user_id')->toArray()),
      'ticket_quantity' => $faker->numberBetween(1,20),
      'booking_is_active' => $faker->randomElement(array(0,1))
    ];
});
