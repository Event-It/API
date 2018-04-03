<?php

use Faker\Generator as Faker;

$factory->define(App\Model\EventType::class, function (Faker $faker) {
    return [
      'event_type' => $faker->unique()->randomElement(array('Concerts','Parties','Exhibitons','Sports','Art & Theatre','Adventures', 'Health & Wellness','Festivals', 'Meetups', 'Business')),
      'event_type_is_active' => $faker->randomElement(array(0,1))
    ];
});
