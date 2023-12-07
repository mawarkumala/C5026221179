@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Keranjang Belanja</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-sm-3 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
		<div class="form-group row">
            <label for="Harga" class="col-sm-3 col-form-label">Harga per item</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection

