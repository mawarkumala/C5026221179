@extends('master2')
@section('judulhalaman', 'Data Karyawan')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br/>

        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-3 control-label">Kode Pegawai</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required value="{{ $p->kodepegawai }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-3 control-label">Nama Lengkap</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" required value="{{ $p->namalengkap }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-3 control-label">Divisi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="divisi" name="divisi" required value="{{ $p->divisi }}" >
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-3 control-label">Departemen</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="departemen" name="departemen" required value="{{ $p->departemen }}" >
            </div>
        </div>

        {{-- <div class="form-group row">
            <label for="tersedia" class="col-sm-1 control-label">Tersedia</label>
            <div class="col-sm-9">
            <select class="form-control" id = "tersedia" name="tersedia">
                <option value = "Y">Ya</option>
                <option value = "N">Tidak</option>
            </select>
            </div>
        </div> --}}



		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
