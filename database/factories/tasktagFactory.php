<?php

use Faker\Generator as Faker;

$factory->define(App\tasktag::class, function (Faker $faker) {
    return [
      'tasktag_name' => $faker->text(10),
      'event_id' => $faker->randomElement(DB::table('events')->get()->pluck('id')->toArray()),
      'tasktag_is_active' => $faker->randomElement(array(0,1))
    ];
});
