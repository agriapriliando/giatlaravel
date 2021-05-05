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
            <form method="" >
                <div class="form-group">
                  <label>Nama</label>
                  <input name="name" type="text" class="form-control" placeholder="Masukan Nama Anda" required>
                  <small>Petunjuk : Isi dengan Nama Lengkap beserta Gelar | Contoh 1 : Dr. Nadim Maka, ST., M.Kom</small>
                </div>
                <div class="form-group">
                  <label>NIP</label>
                  <input name="nip" type="text" class="form-control" placeholder="Masukan NIP Anda/ Kosongkan jika belum ada">
                  <small>Petunjuk : Isi NIP anda, kosongkan jika tidak ada | Contoh : 19930420 201903 1 011</small>
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input name="job" type="text" class="form-control" placeholder="Masukan Jabatan dan Tugas Tambahan jika ada">
                  <small>Petunjuk : Isi dengan Nama Jabatan ASN dan Tugas Tambahan (Jika ada) | Contoh : Pranata Komputer / Plt. Kepala UPT Teknologi Informasi dan Pangkalan data</small>
                </div>
                <div class="form-group">
                    <label>Kontak yang bisa dihubungi</label>
                    <textarea name="contact" type="text" class="form-control"></textarea>
                    <small>Petunjuk : Tambahkan baris baru jika kontak lebih dari satu, beserta keterangan jika perlu |<br>
                        Contoh : 085249441182(Call/Whatsapp/Telegram) <br>
                        085249444828 (emergency) <br>
                        agripriliando@gmail.com | agriapriliando@iaknpky.ac.id
                    </small>
                </div>
                <div class="form-group">
                    <label>Nama Atasan Langsung</label>
                    <div class="has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input id="myAutocomplete" type="text" class="form-control" placeholder="Search" required>
                        <small>Petunjuk : Cari Nama Atasan Langsung sesuai yang tertera pada Format Laporan Kinerja</small>
                        <button class="btn btn-info btn-sm mt-2" onclick="resetItem()">Reset Isian</button>
                    </div>
                    <input id="id_leader" type="text" class="form-control" style="display: none;" required>
                </div>
                <div class="form-group">
                    <label>Unit Kerja</label>
                    <input name="unit" type="text" class="form-control" placeholder="Masukan Nama Unit Kerja" required>
                    <small>Petunjuk : Isi dengan Nama Unit Kerja Anda Sesuai PMA 26 TH 2020 - Ortaker IAKN Palangka Raya | Contoh : UPT Teknologi Informasi dan Pangkalan Data</small>
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
<!-- content -->
@endsection