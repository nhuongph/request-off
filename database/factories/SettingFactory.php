<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Setting::class, function (Faker $faker) {
    return [
        'morning_start_time' => '8:00',
        'morning_end_time' => '12:00',
        'afternoon_start_time' => '13:00',
        'afternoon_end_time' => '17:00',
        'minute_off_max' => 480,
        'minute_off_min' => 240,
    ];
});
