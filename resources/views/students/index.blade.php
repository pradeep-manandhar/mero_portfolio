@extends('layout.admin')
@section('body')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <a href="{{route('students.create')}}" class="btn btn-success">Add new Student</a><br>
        <br>
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone Number</td>
                </tr>

            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone?->phone_number?? 'No phone' }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </body>

    </html>
@endsection
