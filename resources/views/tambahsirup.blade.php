@extends('master2')
@section('judulhalaman','Data Sirup')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Sirup</h3>

	<a href="/sirup"> Kembali</a>

	<br/>
	<br/>

	<form action="/sirup/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-sm-3 col-form-label">Merk Sirup</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-3 col-form-label">Stock Sirup</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" id="stock" name="stock">
            </div>
        </div>
		{{-- <div class="form-group row">
            <label for="tersedia" class="col-sm-3 col-form-label">Tersedia</label>
            <div class = "col-sm-9">
                <select class="form-control" id="tersedia" name="tersedia">
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
            </div>
        </div> --}}

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection

