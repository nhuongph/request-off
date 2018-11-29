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

$factory->define(App\Models\Branch::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'company_id' => App\Models\Company::first()->id ?? 0,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
    ];
});
