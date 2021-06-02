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
    <h1 class="mt-4 pb-2">Hai, <b>{{ session('user')}}</b></h1>
    <div class="row">
        <div class="col">
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM UBAH AKUN</span></p><p>Silahkan lakukan perubahan berikut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="POST" action="{{ url('/user/addprocess')}}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                  <label>Nama Akun</label>
                  <input name="name" type="text" class="form-control" placeholder="Masukan Nama Akun Anda" required value="{{ old('name') }}">
                  <small>Petunjuk : Isi dengan nama akun atau nama anda </small>
                </div>
                <div class="form-group">
                    <label>Pilih Pegawai</label>
                    <input type="text" class="employeeac form-control" placeholder="Ketik dan Pilih Pegawai" required>
                    <input class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" type="text" id="field_id" style="display: none" value="{{ old('employee_id')}}">
                    <small>Petunjuk : Ketik lalu pilih Nama Pegawai | Pastikan Nama Pegawai telah ada pada daftar / Data Pegawai</small>
                    @error('employee_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="form-group">
                    <label>Pilih Organisasi</label>
                    <select class="custom-select" name="organization_id" autocomplete="on">
                        @foreach ($org as $item)
                            <option value="{{$item->id}}">{{$loop->iteration." | ".$item->title}}</option>
                        @endforeach
                    </select>
                    <small>Petunjuk : Pilih Organisasi Induk dari Sub Unit</small>
                </div>
                <div class="form-group">
                    <label>Masukan Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Masukan Email Aktif Anda" required value="{{ old('email') }}">
                    <small>Petunjuk : Isi dengan email yang Aktif | Contoh 1 : agripriliando@gmail.com</small>
                </div>
                <div class="form-group">
                    <label>Pilih Role / Jenis Akun</label>
                    <select class="custom-select" name="role">
                        <option >Pilih Role Akun</option>
                        <option value="2">Pegawai</option>
                        <option value="1">Administrator</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                        <a href="{{ url('/user')}}" class="btn btn-danger btn-block mb-4">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection