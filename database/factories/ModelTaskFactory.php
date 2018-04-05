<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Task::class, function (Faker $faker) {
    return [
      'task_heading' => $faker->text(10),
      'task_tag_id' => $faker->randomElement(DB::table('task_tags')->get()->pluck('task_tag_id')->toArray()),
      'task_description' => $faker->text(20),
      'task_due_date' => $faker->dateTimeBetween('+15 days', '+20 days', 'IST'),
      'task_status' => $faker->randomElement(array(0,1,2)),
      'task_taken_by' => $faker->randomElement(DB::table('user_authentications')->where('user_type_id',2)->get()->pluck('user_id')->toArray()),
      'task_priority' => $faker->randomElement(array(0,1,2)),
      'task_is_active' => $faker->randomElement(array(0,1))
    ];
});
