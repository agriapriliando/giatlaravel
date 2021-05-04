@extends('layout.template')

@section('title','Organisasi')

@section('navbartop')
    @parent
@endsection

@section('navbarside')
    @parent
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 pb-2 text-white">Hai, <b>Agri Apriliando</b></h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Daftar Kegiatan Anda
            <div class="float-right">
                <a href="#" class="btn btn-info">EKSPORT PDF</a>
                <a href="#" class="btn btn-info">PRINT/ CETAK</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Organisasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Organisasi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>IAKN Palangka Raya</td>
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