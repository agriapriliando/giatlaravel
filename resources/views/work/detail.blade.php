@extends('layout.template')

@section('title','Detail')

@section('navbartop')
    @parent
@endsection

@section('navbarside')
    @parent
@endsection

@section('content')
<div class="container-fluid text-white">
    <h1 class="mt-4">Hai, <b>Agri Apriliando</b></h1>
    <hr class="hr">
    <a href="{{ url('act')}}" class="btn btn-info mb-2">Kembali</a>
    <a href="{{ url('act/edit/'.$act->id)}}" class="btn btn-info mb-2">Ubah</a>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12 table-responsive">
            <table class="table table-borderless text-white">
                <tr>
                    <td class="font-weight-bold" colspan="3"><i class="fas fa-calendar-alt"></i> {{ $act->created_at}}</td>
                </tr>
                <tr>
                    <th>Kegiatan</th>
                    <th>:</th>
                    <td>{{ $act->title}}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <th>:</th>
                    <td>{{ $act->detail}}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <th>:</th>
                    <td>{{ $act->qty." ".$act->qtyunit}}</td>
                </tr>
                <tr>
                    <th>Unit Kerja / Sub Unit</th>
                    <th>:</th>
                    <td>{{ $act->unit->title}}</td>
                </tr>
            </table>
            <a href="{{ url('act')}}" class="btn btn-info mb-2">Kembali</a>
            <a href="{{ url('act/edit/'.$act->id)}}" class="btn btn-info mb-2">Ubah</a>
        </div>
    </div>
</div>
@endsection