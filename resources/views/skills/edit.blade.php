@extends('layout.admin')
@section('body')
    <h1>Edit {{ $edit->skill_name }}'s data</h1>
    <form action="{{ route('skills.update', $edit->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Skill Name:</label>
            <input type="text" class="form-control" name="skill_name" value="{{ old('skill_name', $edit->skill_name) }}">
        </div>

        <div class="mb-3">
            <label for="skill_level" class="form-label">Skill Level:</label>
            <select name="skill_level" id="skill_level" class="form-control">
                <option value="">{{ old('skill_level', $edit->skill_level) }}</option>
                @foreach (\App\Models\Skills::levels as $skill_level)
                    <option value="{{ $skill_level }}" {{ old('skill_level', $edit->skill_level) == $skill_level ? 'selected' : '' }}>
                        {{ ucfirst($skill_level) }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="skill_category" class="form-label">Skill category:</label>
            <select name="skill_category" id="skill_category" class="form-control">
                <option value="">{{ old('skill_category', $edit->skill_category) }}</option>
                @foreach (\App\Models\Skills::categories as $skill_category)
                    <option value="{{ $skill_category }}" {{ old('skill_category', $edit->skill_category) == $skill_category ? 'selected' : '' }}>
                        {{ ucfirst($skill_category) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="created_date" class="form-label">Skill Created date:</label>
            <input type="date" class="form-control" name="created_at" value="{{ old('created_at', $edit->created_at) }}">
        </div>

        <div class="mb-3">
            <label for="updated_date" class="form-label">Skill updated date:</label>
            <input type="date" class="form-control" name="updated_at" value="{{ old('updated_at', $edit->updated_at) }}">
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
@endsection
