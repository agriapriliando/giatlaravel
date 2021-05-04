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
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM TAMBAH KEGIATAN HARIAN</span></p><p>Silahkan lakukan pengisian form berikut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="" >
                <div class="form-group">
                  <label>Judul Kegiatan</label>
                  <input name="title" type="text" class="form-control" placeholder="Masukan nama kegiatan" required>
                  <small>Petunjuk : Isi dengan kegiatan utama | Contoh 1 : Pengisian KRS | Contoh 2 : Pembuatan Denah Hotspot Internet</small>
                </div>
                <div class="form-group">
                    <label>Deskripsi Kegiatan</label>
                    <textarea name="desc"class="form-control" required></textarea>
                    <small>Petunjuk : Isi dengan penjelasan dari kegiatan utama | Contoh : Pengisian KRS Mhs Program Studi Musik Gereja TA 2020/2021 Genap</small>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                          <label>Kuantitas</label>
                          <input name="qty" type="number" class="form-control" placeholder="Masukan Angka" required>
                          <small>Petunjuk : Isi dengan Angka / Bilangan Bulat</small>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                          <label>Satuan</label>
                          <input name="qty" type="text" class="form-control" placeholder="Masukan Angka" required>
                          <small>Petunjuk : Isi dengan Satuan Kuantitas | Contoh : Dokumen, Kegiatan, Berkas, Kegiatan, Surat, SK, dll | Sesuaikan dengan jenis output kegiatan / pekerjaan</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-4 btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection