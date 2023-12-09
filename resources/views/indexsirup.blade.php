@extends('master2')
@section('judulhalaman','Data Sirup')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Sirup</h3>

	<a href="/sirup/tambahsirup" class="btn btn-primary"> + Tambah Sirup</a>

	<br/>
    <p>Cari Data Sirup :</p>
	<form action="/sirup/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Sirup .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr class="text-center">
			<th>Kode Sirup</th>
			<th>Merk Sirup</th>
			<th>Stock Sirup</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($sirup as $p)
		<tr class="text-center">
			<td>{{ $p->kodesirup }}</td>
			<td>{{ $p->merksirup }}</td>
			<td>{{ $p->stocksirup }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/sirup/viewsirup/{{ $p->kodesirup }}" class="btn btn-success">View</a>
                |
				<a href="/sirup/editsirup/{{ $p->kodesirup }}" class="btn btn-warning">Edit</a>
				|
				<a href="/sirup/hapus/{{ $p->kodesirup }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$sirup-> links()}}

@endsection
