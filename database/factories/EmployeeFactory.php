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

$factory->define(App\Models\Employee::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'user_name' => 'admin',
        'password' => bcrypt('1234567'),
        'branch_id' => App\Models\Branch::first()->id ?? 0,
        'company_id' => App\Models\Company::first()->id ?? 0,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'start_date' => '2018-11-11',
        'end_date' => null,
        'role' => App\Models\Employee::ROLE_ADMIN,
        'status' => App\Models\Employee::STATUS_USING,
        'email_verified_at' => \Carbon\Carbon::now(),
        'remember_token' => $faker->linuxPlatformToken,
    ];
});
