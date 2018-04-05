<?php

use Faker\Generator as Faker;

$factory->define(App\Model\SubEvent::class, function (Faker $faker) {
    return [
      //'sub_event_id' => $faker->randomElement(array(0)), 150 records
      //'sub_event_id' => $faker->randomElement(array(1)), 100 records
      //'sub_event_id' => $faker->randomElement(array(2)), 30 records
      'sub_event_id' => $faker->randomElement(array(3)), //20 records
      'event_id' => $faker->unique()->randomElement(DB::table('events')->get()->pluck('event_id')->toArray()),
      'sub_event_name' => $faker->text(20),
      'sub_event_start_time' => $faker->dateTimeBetween('-180 days', '-60 days', 'IST'),
      'sub_event_end_time' => $faker->dateTimeBetween('-59 days', 'now', 'IST'),
      'sub_event_venue' => $faker->text(20),
      'sub_event_thumbnail_photo' => $faker->text(50),
      'sub_event_banner_photo' => $faker->text(50),
      'sub_event_security_option' => $faker->randomElement(array(0,1)),
      'sub_event_is_active' => $faker->randomElement(array(0,1))
    ];
});
