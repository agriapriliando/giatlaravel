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
                <a href="{{url('emp/add')}}" class="btn btn-info"><i class="fa fa-plus"></i> TAMBAH PEGAWAI</a>
                {{-- <a href="#" class="btn btn-info"><i class="fa fa-file-download"></i> UNDUH TEMPLATE</a>
                <a href="#" class="btn btn-info"><i class="fa fa-file-import"></i> IMPORT EXCEL</a>
            </div> --}}
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Unit Kerja</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($emp as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->unit->title}}</td>
                            <td>{{$item->job}}</td>
                            <td>
                                <a href="{{url('/emp/edit/'.$item->id)}}" class="btn btn-info btn-sm">Ubah</a>
                                <form method="POST" action="{{url('/emp/delete/'.$item->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Yakin ingin Hapus Data?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
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