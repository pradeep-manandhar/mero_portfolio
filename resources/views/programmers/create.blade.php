@extends('layout.admin')
@section('body')
<h1>Recruit new Programmer</h1>
<form action="{{route('programmers.store')}}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="course_id" class="form-label">Courses</label>
            <select name="course_id" id="course_id" class="form-select">
                <option value="">Select the course</option>
                @foreach ($course as $courses)
                <option  value="{{$courses->id}}">{{$courses->title}}</option>
                @endforeach
            </select>
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Programmer Name</label>
        <input name="name"type="text" class="form-control" placeholder="Enter your name" value="{{old('name')}}">
    </div>

    <button type="Submit" class="btn btn-success">Add</button>
</form>
@endsection
