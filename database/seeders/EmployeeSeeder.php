<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'user_id' => 1,
                'unit_id' => 1,
                'leader_id' => 1,
                'organization_id' => 1,
                'nip' => '19930429 201903 1 011',
                'name' => 'Agri Apriliando, ST',
                'job' => 'Calon Pranata Komputer/ Plt. Kepala UPT TIPD',
                'contact' => '085249441182',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'unit_id' => 1,
                'leader_id' => 2,
                'organization_id' => 1,
                'nip' => 'Honorer',
                'name' => 'Novita Erianti, ST',
                'job' => 'Tenaga Pramubakti | Operator PDDIKTI',
                'contact' => '085249441182',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'unit_id' => 1,
                'leader_id' => 2,
                'organization_id' => 1,
                'nip' => 'Honorer',
                'name' => 'Susi, ST',
                'job' => 'Tenaga Pramubakti | Operator PDDIKTI',
                'contact' => '085249441182',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'unit_id' => 1,
                'leader_id' => 2,
                'organization_id' => 1,
                'nip' => 'Honorer',
                'name' => 'Endang Juwanto, ST',
                'job' => 'Tenaga Pramubakti | Operator Jaringan Internet',
                'contact' => '085249441182',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
