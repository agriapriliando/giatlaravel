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
            Daftar Akun / Pengguna
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="float-right">
                <a href="{{ url('user/add')}}" class="btn btn-info"><i class="fa fa-plus"></i> TAMBAH PENGGUNA</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display responsive" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Akun</th>
                            <th>Pegawai</th>
                            <th>Email</th>
                            <th>Organisasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Akun</th>
                            <th>Pegawai</th>
                            <th>Email</th>
                            <th>Organisasi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->employee->name}}</td>
                            <td>{{ $item->organization->title}}</td>
                            <td>{{ $item->email}}</td>
                            <td>
                                <a href="{{ url('user/edit/'.$item->id)}} " class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Ubah</a>
                                <a href="{{ url('user/pass/'.$item->id)}} " class="btn btn-secondary btn-sm"><i class="fas fa-key"></i> Password</a>
                                <form method="POST" action="{{ url('user/delete/'.$item->id)}}">
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