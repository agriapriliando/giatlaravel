@extends('layout.report')

@section('title','Laporan Harian')

@section('content')
<page size="A4" class="p-5">
    <div class="d-print-none">
        <a href="{{ url('report')}} " class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        <a href="" class="btn btn-primary" onclick="window.print()"><i class="fa fa-print"></i> Cetak</a>
    </div>
    <div class="text-center font-weight-bold">
        <p>LAPORAN KINERJA HARIAN <br>
        BULAN {{strtoupper($work[0]->created_at->isoFormat('MMMM'))." ".$work[0]->created_at->format("Y")}}</p>
    </div>

    <table>
        <tr>
            <td width="120px">Nama</td>
            <td width="20px">:</td>
            <td>{{$profil->name}}</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$profil->job}}</td>
        </tr>
        <tr>
            <td width>Unit Kerja</td>
            <td>:</td>
            <td>{{$profil->unit->title}}</td>
        </tr>
    </table>

    <table class="firstTable" style="width: 100%">
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Uraian Tugas / Kegiatan</th>
            <th colspan="2">Volume</th>
        </tr>
        <?php
        $find = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        $replace = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        ?>
        @foreach ($work as $item)
        <tr>
            <td class="text-center">{{$loop->iteration}}.</td>
            <td>{{str_ireplace($find,$replace,$item->created_at->format("l"))}}</td>
            <td>{{$item->created_at->format("d/m/Y")}}</td>
            <td><span style="font-weight: bold">{{$item->title}}</span> <span style="font-style: italic">{{"| Detail: ".$item->detail}}</span></td>
            <td class="text-center">{{$item->qty}}</td>
            <td>{{$item->qtyunit}}</td>
        </tr>
        @endforeach
    </table>

    <div class="row justify-content-center">
        <div class="col-1">
        </div>
        <div class="col-5 pengesahan ttd">
            <div class="mt-5 ttd">
                <p>Mengetahui,<br>
                {{$profil->leader->job}},</p>
            </div>
            <div>
                <p>{{$profil->leader->name}}<br>
                NIP. {{$profil->leader->nip}}</p>
            </div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-5">
            {{-- <p>Palangka Raya, <span id="date-time"></span></p> --}}
            <?php
                $replace = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus","September","Oktober","November","Desember");
                $find = array("1","2","3","4","5","6","7","8","9","10","11","12");
            ?>
                <p>Palangka Raya, {{$tanggal->format('d')." ".str_replace($find,$replace,$tanggal->format('n'))." ".$tanggal->format('Y')}}</p>
                {{-- <p>Palangka Raya, {{$tanggal}}</p> --}}
            <div class="ttd">
                <p>Yang bersangkutan,</p>
            </div>
            <div>
                <p>{{$profil->name}} <br>
                NIP. {{$profil->nip}}</p>
            </div>
        </div>
    </div>
</page>
@endsection