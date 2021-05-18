<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            [
                'user_id' => 1,
                'unit_id' => 1,
                'organization_id' => 1,
                'title' => 'Mengkonfigurasi server ubuntu untuk keperluan repository kampus',
                'desc' => 'Mengkonfigurasi server ubuntu untuk keperluan repository kampus pada Peralatan Server',
                'qty' => 1,
                'qtyunit' => 'Kegiatan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'unit_id' => 1,
                'organization_id' => 1,
                'title' => 'Mengikuti Diklat KTI Puslitbangdiklat Kemenag',
                'desc' => 'Mengikuti Diklat KTI Puslitbangdiklat Kemenag, Karya tulis Ilmiah secara Daring',
                'qty' => 1,
                'qtyunit' => 'Kegiatan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'unit_id' => 1,
                'organization_id' => 1,
                'title' => 'Input Jadwal Prodi Musik Gereja Semester Genap Tahun Akademik 2020/2021',
                'desc' => 'Mengikuti Diklat KTI Puslitbangdiklat Kemenag, Karya tulis Ilmiah secara Daring',
                'qty' => 1,
                'qtyunit' => 'Kegiatan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
