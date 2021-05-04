@extends('layout.template')

@section('title','Detail')

@section('navbartop')
    @parent
@endsection

@section('navbarside')
    @parent
@endsection

@section('content')
<div class="container-fluid text-white">
    <h1 class="mt-4">Hai, <b>Agri Apriliando</b></h1>
    <hr class="hr">
    <a href="#" class="btn btn-info mb-2">Kembali</a>
    <a href="#" class="btn btn-info mb-2">Ubah</a>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12 table-responsive">
            <table class="table table-borderless text-white">
                <tr>
                    <td class="font-weight-bold" colspan="3"><i class="fas fa-calendar-alt"></i> 04/05/2021 14:15 WIB</td>
                </tr>
                <tr>
                    <th>Kegiatan</th>
                    <th>:</th>
                    <td>Melakukan Perancangan Desain Pengolahan Data Presensi Bulanan Pegawai</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <th>:</th>
                    <td>Melakukan Perancangan Desain Pengolahan Data Presensi Bulanan Pegawai. Perancangan dilakukan untuk membantu bagian Kepegawaian menghitung dan mengolah data presensi secara otomatis</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <th>:</th>
                    <td>1 Kegiatan</td>
                </tr>
                <tr>
                    <th>Unit Kerja / Sub Unit</th>
                    <th>:</th>
                    <td>UPT Teknologi Informasi dan Pangkalan Data</td>
                </tr>
            </table>
            <a href="#" class="btn btn-info mb-2">Kembali</a>
            <a href="#" class="btn btn-info mb-2">Ubah</a>
        </div>
    </div>
</div>
@endsection