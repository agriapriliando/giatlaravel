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
    <h3 class="mt-4">Selamat Datang, <b>{{ session('emp')}}</b></h3>
    <div class="row">
        <div class="col-12">
            <p class="h5">Ini adalah layanan perekaman kegiatan harian.</p>
            <p class="h4 mb-2"><span class="badge badge-primary p-2"> Tanggal Hari Ini {{$tgl}}</span></p>
            <a href="{{url('act/add')}}" class="btn btn-warning mb-2"><i class="fa fa-plus-square"></i> TAMBAH KEGIATAN</a>
            <a href="{{url('act')}}" class="btn btn-warning mb-2"><i class="fa fa-eye"></i> DAFTAR KEGIATAN</a>
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
                        @foreach ($act as $item)
                        <tr>
                            <td>{{ $item->title }}<span class="font-weight-bold"> | Detail: </span>{{$item->desc}}</td>
                            <td>{{ $item->qty}}</td>
                            <td>{{ $item->qtyunit}}</td>
                            <td>{{ date_format($item->created_at,'d/m/Y G:H')}}</td>
                            <td>
                                <a href="{{url('act/detail/'.$item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat</a>
                                <form action="{{url('act/delete/'.$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
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