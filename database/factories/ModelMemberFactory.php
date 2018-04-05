<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Member::class, function (Faker $faker) {
    return [
      'user_id' => $faker->randomElement(DB::table('user_authentications')->where('user_type_id',2)->get()->pluck('user_id')->toArray()),
      'event_id' => $faker->randomElement(DB::table('events')->get()->pluck('event_id')->toArray()),
      'member_is_active' => $faker->randomElement(array(0,1))
    ];
});
