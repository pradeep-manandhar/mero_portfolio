@extends('layout.admin')
@section('body')

<body class="text-center mt-5">
    <h1>Kukur</h1>

    @isset($error)
        <p class="text-danger">{{ $error }}</p>
    @else
        <img src="{{ $imageUrl }}" alt="Dog" class="img-fluid rounded shadow" style="max-height:400px;">
    @endisset

    <br><br>
    <a href="{{ url('/dog/random') }}" class="btn btn-primary">Load Another</a>
</body>


@endsection
