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
            <i class="fas fa-folder mr-1"></i>Ini adalah menu cetak laporan kinerja bulanan
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                    <form action="{{url('/monthly')}}">
                    <div class="form-group">
                        <select name="bulan" class="custom-select">
                            <option selected>Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <select name="tahun" class="custom-select">
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection