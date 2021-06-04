<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Agri Apriliando',
                'email' => 'agri@iaknpky.ac.id',
                'role' => '1',
                'password' => Hash::make('iakn2021'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Susi',
                'email' => 'susi@iaknpky.ac.id',
                'role' => '2',
                'password' => Hash::make('iakn2021'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => 'Novita Erianti',
                'email' => 'novitaerianti@iaknpky.ac.id',
                'role' => '2',
                'password' => Hash::make('iakn2021'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => 'Endang Juwanto',
                'email' => 'endangjuwanto@iaknpky.ac.id',
                'role' => '2',
                'password' => Hash::make('iakn2021'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
