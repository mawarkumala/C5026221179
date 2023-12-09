@extends('master2')
@section('judulhalaman','Data Sirup')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Sirup</h3>

	<a href="/sirup"> Kembali</a>

	<br/>
	<br/>

	@foreach($sirup as $p)
	<form action="/sirup/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesirup }}"> <br/>

        <div class="form-group row">
            <label for="merk" class="col-sm-3 col-form-label">Merk Sirup</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="merk" name="merk" value="{{ $p->merksirup }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-3 col-form-label">Stock Sirup</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" required="required" name="stock" value="{{ $p->stocksirup }}">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
