@extends('layout.admin')
@section('body')
<h1>Add new Course</h1>
<form action="{{route('courses.store')}}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="programmer_id" class="form-label">programmers</label>
            <select name="programmer_id" id="programmer_id" class="form-select">
                <option value="">Select the programmer</option>
                @foreach ($programmer as $programmers)
                <option  value="{{$programmers->id}}">{{$programmers->name}}</option>
                @endforeach
            </select>
    </div>

    <div class="mb-3">
    <label for="title" class="form-label">Course Title</label>
        <input name="title"type="text" class="form-control" placeholder="Enter the course title" value="{{old('name')}}">
    </div>

    <button type="Submit" class="btn btn-success">Add</button>
</form>
@endsection
