@extends('layout.template')

@section('title','Organisasi')

@section('navbartop')
    @parent
@endsection

@section('navbarside')
    @parent
@endsection

@section('content')
<!-- content -->
<div class="container-fluid">
    <h1 class="mt-4 pb-2 text-white">Hai, <b>Agri Apriliando</b></h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Daftar Pegawai di Lingkungan IAKN Palangka Raya
            <div class="float-right">
                <a href="#" class="btn btn-info"><i class="fa fa-plus"></i> TAMBAH PEGAWAI</a>
                <a href="#" class="btn btn-info"><i class="fa fa-file-download"></i> UNDUH TEMPLATE</a>
                <a href="#" class="btn btn-info"><i class="fa fa-file-import"></i> IMPORT EXCEL</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive wrap" id="dataPegawai" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Unit Kerja</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Unit Kerja</th>
                            <th>Jabatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Agri Apriliando, ST</td>
                            <td>19930429 201903 1 011</td>
                            <td>UPT Teknologi Informasi dan Pangkalan Data TIPD</td>
                            <td>Calon Pranata Komputer / Plt. Kepala UPT Teknologi Informasi dan Pangkalan Data</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Susi, ST</td>
                            <td>HR</td>
                            <td>UPT Teknologi Informasi dan Pangkalan Data</td>
                            <td>Pramubakti / Operator PDDIKTI</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Novita Erintanti, ST</td>
                            <td>HR</td>
                            <td>UPT Teknologi Informasi dan Pangkalan Data</td>
                            <td>Pramubakti / Operator PDDIKTI</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Endang Juwanto, ST</td>
                            <td>HR</td>
                            <td>UPT Teknologi Informasi dan Pangkalan Data</td>
                            <td>Pramubakti / Pengelola Jaringan Internet</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Andika Silviana, ST</td>
                            <td>HR</td>
                            <td>Sub Bagian Administrasi Umum</td>
                            <td>Pramubakti / Kepegawaian</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- content -->
@endsection