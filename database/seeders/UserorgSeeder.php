<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserorgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->where('id',1)
            ->update([
                'employee_id' => 1,
                'organization_id' => 1
                ]);

        DB::table('users')
            ->where('id',2)
            ->update([
                'employee_id' => 2,
                'organization_id' => 1
                ]);

        DB::table('users')
            ->where('id',3)
            ->update([
                'employee_id' => 3,
                'organization_id' => 1
                ]);

        DB::table('users')
            ->where('id',4)
            ->update([
                'employee_id' => 4,
                'organization_id' => 1
                ]);
        
    }
}
