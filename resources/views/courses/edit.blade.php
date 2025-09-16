@extends('layout.admin')
@section('body')
<h1>Edit form</h1>
<form action="{{route('courses.update',$edit->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Course Title</label>
        <input type="text" name="title" class="form-control" value="{{old('title',$edit->title)}}">
    </div>


    <button class="btn btn-success">Save</button>

</form>
@endsection
