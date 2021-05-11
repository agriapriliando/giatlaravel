@extends('layout.template')

@section('title','Organisasi')

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
            <p>Ini adalah <span style="background-color: white; color:#c91dd1; padding: 10px; border-radius: 8px; line-height: 5px;">FORM UBAH DATA</span></p><p>Silahkan lakukan perubahan data anda.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
            <form method="POST" action="{{url('/emp/editprocess/'.$emp->id)}}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                  <label>Nama</label>
                  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Anda" required value="{{old('name',$emp->name)}}" required>
                  <small>Petunjuk : Isi dengan Nama Lengkap beserta Gelar | Contoh 1 : Dr. Nadim Maka, ST., M.Kom</small>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>NIP</label>
                  <input name="nip" type="text" class="form-control @error('nip') is-invalid @enderror" placeholder="Masukan NIP Anda/ Kosongkan jika belum ada" value="{{old('nip',$emp->nip)}}">
                  <small>Petunjuk : Isi NIP anda, kosongkan jika tidak ada | Contoh : 19930420 201903 1 011</small>
                  @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input name="job" type="text" class="form-control" placeholder="Masukan Jabatan dan Tugas Tambahan jika ada" value="{{old('job',$emp->job)}}" required>
                  <small>Petunjuk : Isi dengan Nama Jabatan ASN dan Tugas Tambahan (Jika ada) | Contoh : Pranata Komputer / Plt. Kepala UPT Teknologi Informasi dan Pangkalan data</small>
                </div>
                <div class="form-group">
                    <label>Kontak yang bisa dihubungi</label>
                    <textarea name="contact" type="text" class="form-control">{{old('contact', $emp->contact)}}</textarea>
                    <small>Petunjuk : Tambahkan baris baru jika kontak lebih dari satu, beserta keterangan jika perlu |<br>
                        Contoh : 085249441182(Call/Whatsapp/Telegram)
                    </small>
                </div>
                <div class="form-group">
                    <label>Atasan Langsung <small>sesuai Laporan Kinerja Bulanan</small></label>
                    <select class="custom-select" name="leader_id" autocomplete="on" required>
                        <option selected>Pilih Atasan</option>
                        @foreach ($ld as $item)
                        <option value="{{ $item->id}}" {{old('leader_id', $emp->leader_id == $item->id ? 'selected' : null)}}>{{ $loop->iteration." | ".$item->name." - ".$item->job." - ".$item->organization->title}}</option>
                        @endforeach
                    </select>
                    <small>Petunjuk : Pilih atasan sesuai Laporan Kinerja Bulanan</small>
                </div>
                <div class="form-group">
                    <label>Unit Kerja <small>sesuai Laporan Kinerja Bulanan</small></label>
                    <select class="custom-select" name="unit_id" required>
                        <option selected>Pilih Unit</option>
                        @foreach ($unit as $items)
                        <option value="{{ $items->id}}" {{old('unit_id', $emp->unit_id == $items->id ? 'selected' : null)}}>{{ $loop->iteration." | ".$items->title." - ".$items->organization->title}}</option>
                        @endforeach
                    </select>
                    <small>Petunjuk : Pilih Unit / Sub Unit</small>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <a href="{{url('emp/list')}}" class="btn btn-primary mb-4 btn-block">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- content -->
@endsection