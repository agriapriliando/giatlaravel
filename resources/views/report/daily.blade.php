@extends('layout.report')

@section('title','Laporan Harian')

@section('content')
<page size="A4" class="p-5">
    <div class="d-print-none">
        <a href="{{ url('')}} " class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        <a href="" class="btn btn-primary" onclick="window.print()"><i class="fa fa-print"></i> Cetak</a>
    </div>
    <div class="text-center font-weight-bold">
        <p>LAPORAN KINERJA HARIAN <br>
        BULAN JANUARI 2021</p>
    </div>

    <table>
        <tr>
            <td width="120px">Nama</td>
            <td width="20px">:</td>
            <td>Agri Apriliando, ST</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>Calon Pranata Komputer / Plt. Kepala UPT TIPD</td>
        </tr>
        <tr>
            <td width>Unit Kerja</td>
            <td>:</td>
            <td>UPT Teknologi Informasi dan Pangkalan Data</td>
        </tr>
    </table>

    <table class="firstTable">
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Uraian Tugas / Kegiatan</th>
            <th colspan="2">Volume</th>
        </tr>
        <tr>
            <td class="text-center">1</td>
            <td>Selasa</td>
            <td>20/04/2021</td>
            <td>Pembaharuan Format DataSheet, Statistik, dan Formula SheetBase Kepegawaian dan Olah Rekap Presensi</td>
            <td class="text-center">4</td>
            <td>Kegiatan</td>
        </tr>
        <tr>
            <td class="text-center">2</td>
            <td>Selasa</td>
            <td>20/04/2021</td>
            <td>Mengikuti Webinar Uji Publik Juknis Pranata Komputer oleh BPS dan Webinar Smart Digital Citizenship oleh BSSN dan Idcloudcomputing</td>
            <td class="text-center">2</td>
            <td>Kegiatan</td>
        </tr>
        <tr>
            <td class="text-center">3</td>
            <td>Selasa</td>
            <td>20/04/2021</td>
            <td>Perekaman dengan Validasi SIMPEG, SAPK, GoogleSheet, Simdiklat Terbaru, Website Institusi</td>
            <td class="text-center">2000</td>
            <td>Karakter</td>
        </tr>
    </table>

    <div class="row justify-content-center">
        <div class="col-1">

        </div>
        <div class="col-5 pengesahan">
            <div class="mt-5">
                <p>Mengetahui,<br>
                Wakil Rektor Bidang Administrasi Umum, Perencanaan dan Keuangan</p>
            </div>
            <div class="ttdkiri">
                <p>Tirta Susila, D.Th<br>
                NIP. 19730621 200604 2 001</p>
            </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-5">
            <p>Palangka Raya, <span id="date-time"></span></p>
            <p>Yang bersangkutan,</p>
            <div class="ttdkanan">
                <p>Agri Apriliando, ST <br>
                NIP. 19930429 201903 1 011</p>
            </div>
        </div>
    </div>
</page>
@endsection