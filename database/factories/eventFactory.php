<?php

use Faker\Generator as Faker;

$factory->define(App\event::class, function (Faker $faker) {
    return [
      'eventtype_id' => $faker->numberBetween(1,10),
      'event_name' => $faker->company,
      'event_start_time' => $faker->dateTimeBetween('-180 days', '-60 days', 'IST'),
      'event_end_time' => $faker->dateTimeBetween('-59 days', 'now', 'IST'),
      'event_country' => $faker->text(20),
      'event_venue' => $faker->text(20),
      'event_city' => $faker->text(20),
      'event_video_link' => $faker->url,
      'event_website' => $faker->domainName,
      'event_thumbnail_photo' => $faker->text(50),
      'event_banner_photo' => $faker->text(50),
      'event_status' => $faker->randomElement(array(0,1)),
      'event_security_option' => $faker->randomElement(array(0,1)),
      'event_has_sub_event' => $faker->randomElement(array(0,1)),
      'user_id' => $faker->randomElement(DB::table('user_usertype')->where('usertype_id',2)->get()->pluck('user_id')->toArray()),
      'event_is_active' => $faker->randomElement(array(0,1))
    ];
});
