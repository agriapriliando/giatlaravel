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
            <form method="POST" action="{{ url('/user/pass/'.$user->id)}}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                  <label>Masukan Password Baru</label>
                  <input name="password" type="text" class="form-control" placeholder="Masukan Password Baru" value="{{ old('password') }}">
                  <small>Petunjuk : Isi dengan password baru anda</small>
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