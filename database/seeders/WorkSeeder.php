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
        // mysql query
        INSERT INTO works(user_id,unit_id,organization_id,title,detail,qty,qtyunit,created_at)
        VALUES 
        (1,1,1,'Membuat Nota Usul','Nota Usul Migrasi Data PDDikti',1,'Surat','2021-06-02 07:20:20'),
        (1,1,1,'Membuat Nota Usul','Nota Usul Surat Pernyataan Migrasi Data PDDikti',1,'Surat','2021-06-02 07:20:20');
        DB::table('works')->insert([
            [
                'user_id' => 1,
                'unit_id' => 1,
                'organization_id' => 1,
                'title' => 'Mengkonfigurasi server ubuntu untuk keperluan repository kampus',
                'detail' => 'Mengkonfigurasi server ubuntu untuk keperluan repository kampus pada Peralatan Server',
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
                'detail' => 'Mengikuti Diklat KTI Puslitbangdiklat Kemenag, Karya tulis Ilmiah secara Daring',
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
                'detail' => 'Mengikuti Diklat KTI Puslitbangdiklat Kemenag, Karya tulis Ilmiah secara Daring',
                'qty' => 1,
                'qtyunit' => 'Kegiatan',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
