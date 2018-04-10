<?php

use Faker\Generator as Faker;

$factory->define(App\subevent::class, function (Faker $faker) {
    return [
      'event_id' => $faker->randomElement(DB::table('events')->get()->pluck('id')->toArray()),
      'eventtype_id' => $faker->numberBetween(1,10),
      'subevent_name' => $faker->text(20),
      'subevent_start_time' => $faker->dateTimeBetween('-180 days', '-60 days', 'IST'),
      'subevent_end_time' => $faker->dateTimeBetween('-59 days', 'now', 'IST'),
      'subevent_venue' => $faker->text(20),
      'subevent_thumbnail_photo' => $faker->text(50),
      'subevent_banner_photo' => $faker->text(50),
      'subevent_security_option' => $faker->randomElement(array(0,1)),
      'subevent_is_active' => $faker->randomElement(array(0,1))
    ];
});
