<?php

use Faker\Generator as Faker;

$factory->define(App\Model\TicketDescription::class, function (Faker $faker) {
    return [
      'sub_id' => $faker->randomElement(DB::table('sub_events')->get()->pluck('sub_id')->toArray()),
      'ticket_type' => $faker->text(10),
      'ticket_price' => $faker->numberBetween(100,5000),
      'available_tickets' => $faker->numberBetween(500,2000),
      'sold_tickets' => $faker->numberBetween(0,500),
      'ticket_desc_is_active' => $faker->randomElement(array(0,1))
    ];
});
