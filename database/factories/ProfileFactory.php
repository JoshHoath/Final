<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    static $id = 1;
    return [
        'user_id'       =>  $id++,
        'location'      =>  'Calgary, AB',
        'birthday'      =>  $faker->dateTime(),
        'bio'           =>  $faker->realText(mt_rand(10,70)),
        'website'       =>  $faker->url()
    ];
});
