<?php

use Faker\Generator as Faker;

$factory->define(App\eventtype::class, function (Faker $faker) {
    return [
      'event_type' => $faker->unique()->randomElement(array('Concerts','Parties','Exhibitons','Sports','Art & Theatre','Adventures', 'Health & Wellness','Festivals', 'Meetups', 'Business')),
      'eventtype_is_active' => $faker->randomElement(array(0,1))
    ];
});
