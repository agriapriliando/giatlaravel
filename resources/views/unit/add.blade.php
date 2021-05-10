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
    <h1 class="mt-4 pb-2">Hai, <b>Agri Apriliando</b></h1>
    <div class="row">
        <div class="col">
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM TAMBAH SUB UNIT</span></p><p>Silahkan lakukan pengisian form berikut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="POST" action="{{ url('unit/addprocess')}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label>Nama Sub Unit</label>
                  <input name="title" type="text" class="form-control" placeholder="Masukan Nama Sub Unit" required>
                  <small>Petunjuk : Isi dengan Nama Organisasi | Contoh 1 : UPT Teknologi Informasi dan Pangkalan Data | Contoh 2 : Sub Bagian Administrasi Umum</small>
                </div>
                <div class="form-group">
                    <label>Pilih Organisasi</label>
                    <select class="custom-select" name="organization_id" autocomplete="on">
                        <option selected>Pilih Organisasi</option>
                        @foreach ($org as $item)
                        <option value="{{ $item->id}}">{{ $loop->iteration." | ".$item->title}}</option>
                        @endforeach
                    </select>
                    <small>Petunjuk : Pilih Organisasi Induk dari Sub Unit</small>
                </div>
                <div class="form-group">
                    <label>Deskripsi Sub Unit</label>
                    <textarea name="desc"class="form-control" required></textarea>
                    <small>Petunjuk : Isi dengan Informasi Sub Unit | Kontak, dan informasi dasar lainnya.</small>
                </div>
                <div class="form-group">
                    <label>Klasifikasi Level Unit</label>
                    <input name="level" type="text" class="form-control" placeholder="Masukan Kode Level Unit" required>
                    <small>Petunjuk : Isi dengan Kode Level Unit (menggunakan Angka Bulat) | Contoh 0 | Kode ini disesuaikan dengan Struktur Organisasi</small>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-4 btn-block">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection