@extends('layout.admin')
@section('body')
    <h1>Programmers</h1>
    <form action="">
        <div class="mb-3">
            <label for="search" class="form-label"></label>
            <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
    </form>

    <a href="{{route('programmers.create')}}" class="btn btn-warning">Add New Programmer</a><br><br>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Course Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $programmer)
                <tr>
                    <td>{{ $programmer->name }}</td>
                    <td>{{ $programmer->courses->pluck('title')->join(', ') }}</td>
                    <td>
                        <a href="" type="button" class="btn btn-info">View</a>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
