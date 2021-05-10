@extends('layout.template')

@section('title','Daftar Pimpinan')

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
            Daftar Atasan Langsung pada IAKN Palangka Raya <small>Sesuai Laporan Kinerja Bulanan</small>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="float-right">
                <a href="{{url('/leader/add')}}" class="btn btn-info"><i class="fa fa-plus"></i> TAMBAH ATASAN</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive" id="dataLeader" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nip</th>
                            <th>Jabatan</th>
                            <th>Instansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nip</th>
                            <th>Jabatan</th>
                            <th>Instansi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($ld as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->job}}</td>
                            <td>{{$item->organization->title}}</td>
                            <td>
                                <a href="{{url('leader/edit/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                                <form method="POST" action="{{ url('leader/delete/'.$item->id)}}">
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
<!-- content -->
@endsection