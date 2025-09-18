@extends('layout.admin')
@section('body')
<h1>{{$view->title}}'s data</h1>
<table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th class="table-dark">Experience Title</th>
                <td>{{ $view->title }}</td>
            </tr>
            <tr>
                <th class="table-dark">Experience Description</th>
                <td>{{ $view->description }}</td>
            </tr>
            <tr>
                <th class="table-dark">Experience Organization</th>
                <td>{{ $view->organization }}</td>
            </tr>
            <tr>
                <th class="table-dark">Experience Location</th>
                <td>{{ $view->location }}</td>
            </tr>
            <tr>
                <th class="table-dark">Start Date</th>
                <td>{{ $view->start_date }}</td>
            </tr>
            <tr>
                <th class="table-dark">End Date</th>
                <td>{{ $view->end_date }}</td>
            </tr>
        </thead>
    </table>
@endsection
