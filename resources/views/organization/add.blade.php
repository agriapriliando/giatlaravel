@extends('layout.template')

@section('title','Organisasi')

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
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM TAMBAH KEGIATAN HARIAN</span></p><p>Silahkan lakukan pengisian form berikut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="POST" action="{{ url('org/addprocess') }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Title / Nama Organisasi</label>
                  <input name="title" type="text" class="form-control" placeholder="Masukan nama Organisasi" required>
                  <small>Petunjuk : Isi dengan Nama Organisasi | Contoh 1 : Institut Agama Kristen Negeri Palangka Raya | Contoh 2 : Universitas Palangka Raya</small>
                </div>
                <div class="form-group">
                    <label>Deskripsi Organisasi</label>
                    <textarea name="desc"class="form-control" required></textarea>
                    <small>Petunjuk : Jelasakan Profil Organisasi secara ringkas | Kontak, dan informasi dasar</small>
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