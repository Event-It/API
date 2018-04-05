<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Announcement::class, function (Faker $faker) {
    return [
      'event_id' => $faker->unique()->randomElement(DB::table('events')->get()->pluck('event_id')->toArray()),
      'announcement_heading' => $faker->text(10),
      'announcement_text' => $faker->realText(100),
      'announcement_is_active' => $faker->randomElement(array(0,1))
    ];
});
