@extends('layout.admin')
@section('body')
    <h1>View {{ $edit->skill_name }}'s data</h1>

    <table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th class="table-dark">Skill Name</th>
                <td>{{ $edit->skill_name }}</td>
            </tr>
            <tr>
                <th class="table-dark">Skill category</th>
                <td>{{ $edit->skill_category }}</td>
            </tr>
            <tr>
                <th class="table-dark">Skill Level</th>
                <td>{{ $edit->skill_level }}</td>
            </tr>
            <tr>
                <th class="table-dark">Start Date</th>
                <td>{{ $edit->created_at }}</td>
            </tr>
            <tr>
                <th class="table-dark">End Date</th>
                <td>{{ $edit->updated_at }}</td>
            </tr>
        </thead>
    </table>
@endsection
