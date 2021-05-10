<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leaders')->insert([
            [
                'organization_id' => 1,
                'user_id' => 1,
                'nip' => '19730621 200604 2 001',
                'name' => 'Tirta Susila, D.Th',
                'job' => 'Wakil Rektor II Bidang Administrasi Umum, Perencanaan dan Keuangan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'organization_id' => 1,
                'user_id' => 1,
                'nip' => '19641029 201411 1 001',
                'name' => 'Ondel, S.E',
                'job' => 'Pengelola Data Keamanan dan Ketertiban',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
