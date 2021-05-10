@extends('layout.template')

@section('title','Dashboard Admin')

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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="float-right">
                <a href="{{ url('unit/add')}}" class="btn btn-info"><i class="fa fa-plus"></i> TAMBAH UNIT/SUB UNIT</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Organisasi</th>
                            <th>Nama Sub Unit</th>
                            <th>Deskripsi</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Organisasi</th>
                            <th>Nama Sub Unit</th>
                            <th>Deskripsi</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($unit as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->organization->title}}</td>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->desc}}</td>
                            <td>{{ $item->level}}</td>
                            <td>
                                <a href="{{ url('unit/edit/'.$item->id)}} " class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Ubah</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                                <form action="{{ url('unit/delete')}}">
                                
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection