@extends('layout.admin')
@section('body')

<style>
    td {
        width: 70%;
    }
</style>
<h1>{{$view->title}}'s Data</h1>
<table class="table table-striped table-bordered align-middle">
    <thead >
        <tr>
            <th class="table-dark">Course Title</th>
            <td>{{$view->title}}</td>
        </tr>
        <tr>
            <th class="table-dark">Programmer Name</th>
            <td>{{$view->programmers->pluck('name')->join(', ')}}</td>
        </tr>
    </thead>
</table>
@endsection
