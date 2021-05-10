@extends('layout.template')

@section('title','Daftar Pimpinan')

@section('navbartop')
    @parent
@endsection

@section('navbarside')
    @parent
@endsection

@section('content')
<!-- content -->
<div class="container-fluid text-white">
    <h1 class="mt-4 pb-2">Hai, <b>Agri Apriliando</b></h1>
    <div class="row">
        <div class="col">
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM TAMBAH DATA PIMPINAN</span></p><p>Silahkan lakukan pengisian form berikut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="POST" action="{{url('leader/addprocess')}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input name="name" type="text" class="form-control @error('judul') is-invalid @enderror" value="{{old('name')}}" placeholder="Masukan nama Pimpinan / Atasan" required>
                  <small>Petunjuk : Isi dengan Nama Atasan (Nama dan Gelar)</small>
                </div>
                <div class="form-group">
                  <label>NIP</label>
                  <input name="nip" type="text" class="form-control" placeholder="Masukan NIP Pimpinan / Atasan" required>
                  <small>Petunjuk : Isi dengan NIP Atasan</small>
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
                  <label>Jabatan</label>
                  <input name="job" type="text" class="form-control" placeholder="Masukan Jabatan Atasan" required>
                  <small>Petunjuk : Isi dengan Jabatan Atasan / Pimpinan</small>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        <a href="{{ url('url/leader')}}" class="btn btn-primary mb-4 btn-block">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- content -->
@endsection