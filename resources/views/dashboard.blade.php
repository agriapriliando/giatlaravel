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
            <button class="btn btn-warning mb-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Lihat Kegiatan Pegawai
            </button>
            <div class="collapse row" id="collapseExample">
                <div class="col">
                    <a href="{{url('worksall')}}" class="btn btn-warning mb-2"><i class="fa fa-eye"></i> Hari Ini</a>
                    @if (session('user') == 'admin')
                    <a href="{{url('workspeg')}}" class="btn btn-warning mb-2"><i class="fa fa-eye"></i> Tahun Berjalan</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4" style="color: black !important">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DAFTAR KEGIATAN ANDA BULAN {{ $bulaniniupper }}
            <div class="row">
                <div class="col">
                    <a href="{{url('act/add')}}" class="btn btn-success mb-2"><i class="fa fa-plus-square"></i> Tambah</a>
                    <a href="{{url('act')}}" class="btn btn-info mb-2"><i class="fa fa-eye"></i> Kegiatan Saya</a>
                </div>
            </div>
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