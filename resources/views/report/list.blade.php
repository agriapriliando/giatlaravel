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
    <h1 class="mt-4 pb-2 text-white">Hai, <b>{{ session('emp')}}</b></h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-folder mr-1"></i>Ini adalah menu cetak laporan

            <div class="accordion" id="accordionExample">
                
                  <div id="headingOne">
                    <h2 class="mb-3">
                        <button class="btn btn-info text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Laporan Bulanan
                        </button>
                        <button class="btn btn-info text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Laporan Harian
                        </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                            <form action="{{url('/daily')}}" method="GET">
                            <div class="form-group">
                                <select name="bulan" class="custom-select" class="form-control" required>
                                    <option value="">Pilih Bulan</option>
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
                                    <option value="">Pilih Tahun</option>
                                    @foreach ($listyears as $item)
                                        <option value="{{$item->listyear}}">{{$item->listyear}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Laporan</label>
                                <input name="tanggal" type="date" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan Harian</button>
                            </form>
                        </div>
                    </div>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                            <form action="{{url('/monthly')}}" method="GET">
                            <div class="form-group">
                                <select name="bulan" class="custom-select" class="form-control" required>
                                    <option value="">Pilih Bulan</option>
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
                                    <option value="">Pilih Tahun</option>
                                    @foreach ($listyears as $item)
                                        <option value="{{$item->listyear}}">{{$item->listyear}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Laporan</label>
                                <input name="tanggal" type="date" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan Bulanan</button>
                            </form>
                        </div>
                    </div>
                  </div>
                
              </div>
        </div>
    </div>
</div>
@endsection