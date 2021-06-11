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
            Daftar Seluruh Kegiatan Bulan {{ $bln }} <br>
            Hari ini Tanggal : {{$tgl}}
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
                            <th>Pegawai</th>
                            <th>Kegiatan</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Pegawai</th>
                            <th>Kegiatan</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Timestamp</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($act as $item)
                        <tr>
                            <td>{{ $item->user->employee->name}}</td>
                            <td>{{ $item->title }}<span class="font-weight-bold"> | Detail: </span>{{$item->detail}}</td>
                            <td>{{ $item->qty}}</td>
                            <td>{{ $item->qtyunit}}</td>
                            <td>{{ date_format($item->created_at,'d/m/Y G:H')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection