<?php

namespace Database\Seeders;

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
        $this->call([
            OrganizationSeeder::class,
            UnitSeeder::class,
            UserSeeder::class,
            LeaderSeeder::class,
            EmployeeSeeder::class,
            UserorgSeeder::class,
            // WorkSeeder::class
        ]);
    }
}
