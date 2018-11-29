<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SettingSeeder::class);
         $this->call(CompanySeeder::class);
         $this->call(BranchSeeder::class);
         $this->call(EmployeeSeeder::class);
    }
}
