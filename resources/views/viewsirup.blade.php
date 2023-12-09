@extends('master2')

@section('title', 'Data Sirup')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.alfamart.com</a></h2>
    <h3>Data Sirup</h3>

    <a href="/sirup"> Kembali</a>

    <br />
    <br />

    @foreach ($sirup as $t)
        <form action="/sirup/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br /> --}}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 card"
                        style="border: 1px solid #ccc; height: 350px;  margin-right: 100px; margin-top: 10px;">
                    </div>
                    <div class="col-md-7">
                        <div class = "form-group row">
                            <label for = "kode" class="col-md-3 col-form-label">Kode Sirup:</label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="kode" placeholder="kode">{{ $t->kodesirup }}
                                </div>
                            </div>
                        </div>

                        <div class = "form-group row">
                            <label for="merk" class = "col-md-3 col-form-label">Merk Sirup: </label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="merk" placeholder="merk">{{ $t->merksirup }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class = "col-md-3 col-form-label">Stock Sirup: </label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="stock" placeholder="stock">{{ $t->stocksirup }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tersedia" class = "col-md-3 col-form-label">Tersedia:</label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="tersedia" placeholder="tersedia">{{ $t->tersedia }}</div>
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
