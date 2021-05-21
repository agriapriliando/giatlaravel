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
                    <form action="{{url('/daily')}}" method="GET">
                    <div class="form-group">
                        <select name="bulan" class="custom-select" class="form-control" required>
                            <option selected>Pilih Bulan</option>
                            <?php
                            $replace = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus","September","Oktober","November","Desember");
                            $find = array("1","2","3","4","5","6","7","8","9","10","11");
                            ?>
                            @foreach ($listmonths as $item)
                            <option value="{{$item->listmonth}}">{{str_replace($find,$replace,$item->listmonth)}}</option>
                            @endforeach
                            {{-- <option value="{{$item->listmonth}}">{{date("F", mktime(0, 0, 0, $item->listmonth, 10))}}</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="tahun" class="custom-select" class="form-control" required>
                            @foreach ($listyears as $item)
                                <option value="{{$item->listyear}}">{{$item->listyear}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Laporan</label>
                        <input name="tanggal" type="date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                    <form action="{{url('/monthly')}}" method="GET">
                    <div class="form-group">
                        <select name="bulan" class="custom-select" class="form-control" required>
                            <option selected>Pilih Bulan</option>
                            <?php
                            $replace = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus","September","Oktober","November","Desember");
                            $find = array("1","2","3","4","5","6","7","8","9","10","11");
                            ?>
                            @foreach ($listmonths as $item)
                            <option value="{{$item->listmonth}}">{{str_replace($find,$replace,$item->listmonth)}}</option>
                            @endforeach
                            {{-- <option value="{{$item->listmonth}}">{{date("F", mktime(0, 0, 0, $item->listmonth, 10))}}</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="tahun" class="custom-select" class="form-control" required>
                            @foreach ($listyears as $item)
                                <option value="{{$item->listyear}}">{{$item->listyear}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Laporan</label>
                        <input name="tanggal" type="date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection