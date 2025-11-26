@extends('layout.admin')
@section('body')

    <h1>Edit my data</h1>
    <form action="{{ route('profile.update', $edit->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" class="form-control" name="fullname" value="{{ old('fullname', $edit->fullname) }}">
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="{{ old('username', $edit->username) }}">
        </div>

        <div class="mb-3">
            <label for="introduction" class="form-label">My Introduction:</label>
            <input type="text" class="form-control" name="introduction" value="{{ old('introduction', $edit->introduction) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">My Description:</label>
            <input type="text" class="form-control" name="description" value="{{ old('description', $edit->description) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">My Email Address:</label>
            <input type="text" class="form-control" name="email" value="{{ old('email', $edit->email) }}">
        </div>

        <div class="mb-3">
            <label for="github" class="form-label">My Github Link:</label>
            <input type="text" class="form-control" name="github" value="{{ old('github', $edit->github) }}">
        </div>

        <div class="mb-3">
            <label for="linkedin" class="form-label">My Linkedin Link:</label>
            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin', $edit->linkedin) }}">
        </div>

        <div class="mb-3">
            <label for="profile_picture" class="form-label">My Image:</label>
            <input type="file" class="form-control" name="profile_picture">

            @if ($edit->profile_picture)
                <div class="mt-2">
                    <img src="{{ asset('Storage/' . $edit->profile_picture) }}" alt="Current Profile picture" width="120">
                </div>
            @endif
        </div>

        <button class="btn btn-success" type="submit">Update</button>
    </form>

@endsection
