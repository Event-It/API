<?php

use Faker\Generator as Faker;

$factory->define(App\ticketdescription::class, function (Faker $faker) {
    return [
      'ticket_type' => $faker->text(10),
      'ticket_price' => $faker->numberBetween(100,5000),
      'available_tickets' => $faker->numberBetween(500,2000),
      'sold_tickets' => $faker->numberBetween(0,500),
      'ticketdescriptionable_id' => $faker->randomElement(DB::table('events')->get()->pluck('id')->toArray()),
      'ticketdescriptionable_type' => $faker->randomElement(array('subevent')),
      'ticketdescription_is_active' => $faker->randomElement(array(0,1))
    ];
});
