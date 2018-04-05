<?php

use Faker\Generator as Faker;

$factory->define(App\Model\TaskTag::class, function (Faker $faker) {
    return [
      'task_tag_name' => $faker->text(10),
      'event_id' => $faker->unique()->randomElement(DB::table('events')->get()->pluck('event_id')->toArray()),
      'task_tag_is_active' => $faker->randomElement(array(0,1))
    ];
});
