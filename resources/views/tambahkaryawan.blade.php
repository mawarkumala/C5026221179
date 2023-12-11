@extends('master2')
@section('judulhalaman','Data Karyawan')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-3 col-form-label">Kode Pegawai</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai">
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>
		<div class="form-group row">
            <label for="departemen" class="col-sm-3 col-form-label">Departemen</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="departemen" name="departemen">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection

