@extends('master2')
@section('judulhalaman', 'View Pegawai')

@section('konten')

<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3 class="text-conter">View Pegawai</h3>
<div class="container align-center">
    <div class="row bg-light d-flex align-item-center justify-content-center">
        <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid">

        </div>
    <div class="col-8 d-flex flex-column m-3">
    @foreach($pegawai as $p)
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <p>Nama: {{ $p->pegawai_nama }}</p>
            <p>Jabatan: {{ $p->pegawai_jabatan }}</p>
            <p>Umur: {{ $p->pegawai_umur }}</p>
            <p>Alamat: {{ $p->pegawai_alamat }}</p>
    <div class ="d-flex justify-content-between align-item-center">
            <a href="/pegawai" class="btn btn-info">Kembali</a>
    </div>
     @endforeach



    </div>
    </div>
</div>
@endsection
