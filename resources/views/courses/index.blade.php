@extends('layout.admin')
@section('body')
    <h1>Courses</h1>
    <form action="">
        <div class="mb-3">
            <label for="search" class="form-label"></label>
            <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
    </form>

    <a href="{{ route('courses.create') }}" class="btn btn-warning">Add New Course</a><br><br>

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Course Title</th>
                <th>Programmer Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>
                        {{ $course->programmers->pluck('name')->join(', ') }}
                    </td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" type="button" class="btn btn-info">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
