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
    <h1 class="mt-4 pb-2 text-white">Hai, <b>{{ session('emp')}}</b></h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Daftar Seluruh Kegiatan Anda
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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
                        @foreach ($act as $item)
                        <tr>
                            <td>{{ $item->title }}<span class="font-weight-bold"> | Detail: </span>{{$item->detail}}</td>
                            <td>{{ $item->qty}}</td>
                            <td>{{ $item->qtyunit}}</td>
                            <td>{{ date_format($item->created_at,'d/m/Y G:H')}}</td>
                            <td>
                                <a href="{{url('act/detail/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <form action="{{url('act/delete/'.$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Yakin ingin Hapus Data?')" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
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