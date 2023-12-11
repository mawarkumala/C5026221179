@extends('master2')
@section('judulhalaman', 'View Chat')

@section('konten')

<body>
    <br />
    <br />

    <div class="container">
        <h1>CHAT</h1>

        <br />

        @foreach($messages as $message)
            <div class="alert alert-custom"
            style=" background-color: #ffffff; border: 1px solid #a8acaa;
                    border-radius: .25rem; padding: 1.25rem; margin-bottom: 1rem ">
                {!! $message->pesan !!}

            </div>
        @endforeach
    </div>
</body>

</html>
@endsection
