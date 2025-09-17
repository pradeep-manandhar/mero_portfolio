@extends('layout.admin')
@section('body')
    <h1>View {{ $edit->name }}'s data</h1>

    <table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th class="table-dark">Project Name</th>
                <td>{{ $edit->name }}</td>
            </tr>
            <tr>
                <th class="table-dark">Project description</th>
                <td>{{ $edit->description }}</td>
            </tr>
            <tr>
                <th class="table-dark">Project Status</th>
                <td>{{ $edit->status }}</td>
            </tr>
            <tr>
                <th class="table-dark">Start Date</th>
                <td>{{ $edit->start_date }}</td>
            </tr>
            <tr>
                <th class="table-dark">End Date</th>
                <td>{{ $edit->end_date }}</td>
            </tr>

             <tr>
                <th class="table-dark">Project Image</th>
                <td><img src="{{ asset('uploads/projects/' . $edit->image) }}" alt="Current Image" width="120"></td>
            </tr>
        </thead>
    </table>
@endsection
