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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="float-right">
                <a href="{{ url('org/add')}} " class="btn btn-info"><i class="fa fa-plus"></i> TAMBAH ORGANISASI</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Organisasi</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Organisasi</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($org as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title}} </td>
                            <td>{{ $item->desc}} </td>
                            <td>
                                <a href="{{url('org/edit/'.$item->id)}}" class="btn btn-info btn-sm mb-1"><i class="fas fa-edit"></i> Ubah</a>
                                <form action="{{url('org/delete/'.$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin Hapus Data?')"><span><i class="fas fa-trash"></i> Hapus</button>
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