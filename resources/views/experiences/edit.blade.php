@extends('layout.admin')
@section('body')

    <h1>Edit {{ $edit->name }}'s data</h1>
    <form action="{{ route('experience.update', $edit->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div style="color: red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach ()
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Experience Name:</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $edit->title) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Experience Description:</label>
            <input type="text" class="form-control" name="description"
                value="{{ old('description', $edit->description) }}">
        </div>

        <div class="mb-3">
            <label for="organization" class="form-label">Experience organization:</label>
            <input type="text" class="form-control" name="organization"
                value="{{ old('organization', $edit->organization) }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Organization location:</label>
            <input type="text" class="form-control" name="location" value="{{ old('location', $edit->location) }}">
        </div>

        <button class="btn btn-success" type="submit">Update</button>
    </form>
@endsection
