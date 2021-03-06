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
    <h1 class="mt-4">Hai, <b>{{ session('emp')}}</b></h1>
    <hr class="hr mb-4">
    <div class="row">
        <div class="col">
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM UBAH KEGIATAN</span></p><p>Silahkan lakukan pengisian form berikut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="POST" action="{{ url('act/editprocess/'.$act->id)}}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                  <label>Judul Kegiatan</label>
                  <input name="title" type="text" class="typeahead form-control @error('title') is-invalid @enderror" placeholder="Masukan judul kegiatan" value="{{old('title',$act->title)}}" required>
                  <small>Petunjuk : Isi dengan kegiatan utama | Contoh 1 : Pengisian KRS | Contoh 2 : Pembuatan Denah Hotspot Internet</small>
                  @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label>Deskripsi Kegiatan</label>
                    <textarea name="detail"class="form-control @error('detail') is-invalid @enderror" required>{{$act->detail}}</textarea>
                    <small>Petunjuk : Isi dengan penjelasan dari kegiatan utama | Contoh : Pengisian KRS Mhs Program Studi Musik Gereja TA 2020/2021 Genap</small>
                    @error('detail')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-12">
                        <div class="form-group">
                          <label>Waktu Kegiatan</label>
                          <input name="created_at" type="datetime" class="form-control @error('desc') is-invalid @enderror" value="{{ $act->created_at}}" required>
                          <small>Petunjuk : Isi dengan waktu pelaksanaan kegiatan</small>
                            @error('created_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                          <label>Kuantitas</label>
                          <input name="qty" type="number" class="form-control @error('desc') is-invalid @enderror" placeholder="Masukan Angka" value="{{$act->qty}}" required>
                          <small>Petunjuk : Isi dengan Angka / Bilangan Bulat</small>
                          @error('qty')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                          <label>Satuan</label>
                          <input name="qtyunit" type="text" class="form-control @error('qtyunit') is-invalid @enderror" placeholder="Masukan Angka" value="{{ old('qtyunit', $act->qtyunit)}}" required>
                          <small>Petunjuk : Isi dengan Satuan Kuantitas | Contoh : Dokumen, Kegiatan, Berkas, Kegiatan, Surat, SK, dll | Sesuaikan dengan jenis output kegiatan / pekerjaan</small>
                          @error('qtyunit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <a href="{{ url('act')}}" class="btn btn-info mb-4 btn-block">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection