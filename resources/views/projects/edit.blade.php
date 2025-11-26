@extends('layout.admin')
@section('body')
    <h1>Edit {{ $edit->name }}'s data</h1>
    <form action="{{ route('projects.update', $edit->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Project Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $edit->name) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description:</label>
            <input type="text" class="form-control" name="description"
                value="{{ old('description', $edit->description) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Project Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="">{{ old('status', $edit->status) }}</option>
                @foreach (\App\Models\Project::statuses as $status)
                    <option value="{{ $status }}" {{ old('status', $edit->status) == $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Project start date:</label>
            <input type="date" class="form-control" name="start_date" value="{{ old('start_date', $edit->start_date) }}">
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">Project end date:</label>
            <input type="date" class="form-control" name="end_date" value="{{ old('end_date', $edit->end_date) }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Project Image:</label>
            <input type="file" class="form-control" name="image">

            @if ($edit->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $edit->image) }}" alt="Current Image" width="120">
                </div>
            @endif
        </div>


        <button class="btn btn-success" type="submit">Update</button>
    </form>
@endsection
