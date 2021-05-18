@extends('layout.template')

@section('title','Dashboard Admin')

@section('navbartop')
    @parent
@endsection

@section('navbarside')
    @parent
@endsection

@section('content')
<div class="container-fluid text-white">
    <h1 class="mt-4">Selamat Datang, <b>Agri Apriliando</b></h1>
    <div class="row">
        <div class="col-12">
            <p>Ini adalah layanan perekaman kegiatan harian. <br>Tanggal {{$tgl}}</p>
            <a href="{{url('act/add')}}" class="btn btn-info mb-2"><i class="fa fa-plus-square"></i> TAMBAH KEGIATAN</a>
        </div>
    </div>
    <div class="card mb-4" style="color: black !important">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DAFTAR KEGIATAN ANDA BULAN {{ $bulaniniupper }}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive" id="dataKegiatan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kegiatan</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Timestamp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kegiatan</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Timestamp</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Mengikuti Diklat KTI Puslitbangdiklat Kemenag</td>
                            <td>23</td>
                            <td>Kegiatan</td>
                            <td>27-04-2021 12:30 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mempelajari Butir dan Draft Juknis Prakom</td>
                            <td>23</td>
                            <td>Kegiatan</td>
                            <td>27-04-2021 13:12 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mempelajari RAD(Rapid Application Development) Method</td>
                            <td>23</td>
                            <td>Kegiatan</td>
                            <td>27-04-2021 13:14 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mempelajari KTI mengenai Black Box Testing (3 Jurnal)</td>
                            <td>23</td>
                            <td>Kegiatan</td>
                            <td>27-04-2021 13:17 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Membuat Bukti Fisik Perancangan Web IAKN PKY</td>
                            <td>23</td>
                            <td>Kegiatan</td>
                            <td>27-04-2021 13:19 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Menginput KRS mahasiswa Prodi Teologi Semester Genap T.A 2020/2021</td>
                            <td>12</td>
                            <td>Data</td>
                            <td>27-04-2021 13:19 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Menginput KRS mahasiwa Prodi Misiologi Semester Genap T.A 2020/2021</td>
                            <td>25</td>
                            <td>Data</td>
                            <td>27-04-2021 13:19 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Input Jadwal Prodi Musik Gereja Semester Genap Tahun Akademik 2020/2021</td>
                            <td>80</td>
                            <td>Data</td>
                            <td>27-04-2021 13:19 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Input KRS Mahasiswa Prodi Musik Gereja Semester Genap Tahun Akademik 2020/2021</td>
                            <td>76</td>
                            <td>Data</td>
                            <td>27-04-2021 13:19 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Membuat Topologi jaringan internet rektorat IAKN Palangkaraya</td>
                            <td>3</td>
                            <td>Kegiatan</td>
                            <td>27-04-2021 14:10 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Melakukan Sinkronisasi data pengguna di server SISTER</td>
                            <td>2</td>
                            <td>Kegiatan</td>
                            <td>26-04-2021 14:10 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengkonfigurasi server ubuntu untuk keperluan repository kampus</td>
                            <td>1</td>
                            <td>Kegiatan</td>
                            <td>28-04-2021 14:10 WIB</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection