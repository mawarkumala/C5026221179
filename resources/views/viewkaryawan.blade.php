@extends('master2')

@section('title', 'Data Karyawan')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.alfamart.com</a></h2>
    <h3>Data Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />

    @foreach ($karyawan as $t)
        <form action="/karyawan/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br /> --}}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 card"
                        style="border: 1px solid #ccc; height: 350px;  margin-right: 100px; margin-top: 10px;">
                    </div>
                    <div class="col-md-7">
                        <div class = "form-group row">
                            <label for = "kodepegawai" class="col-md-3 col-form-label">Kode Pegawai :</label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="kodepegawai" placeholder="kodepegawai">{{ $t->kodepegawai }}
                                </div>
                            </div>
                        </div>

                        <div class = "form-group row">
                            <label for="namalengkap" class = "col-md-3 col-form-label">Nama Lengkap : </label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="namalengkap" placeholder="namalengkap">{{ $t->namalengkap }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="divisi" class = "col-md-3 col-form-label">Divisi : </label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="divisi" placeholder="divisi">{{ $t->divisi }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departemen" class = "col-md-3 col-form-label">Departemen:</label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="departemen" placeholder="departemen">{{ $t->departemen }}</div>
                            </div>
                        </div><br />

                        <div class="form-group row">
                            <div class="col-md-3 col-form-label">
                                <button type="submit" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
