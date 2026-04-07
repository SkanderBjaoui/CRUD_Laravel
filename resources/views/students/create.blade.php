@extends('layout')

@section('content')
<div class="card">
    <h2 style="font-size: 20px; font-weight: 600; color: #2c3e50; margin-bottom: 24px;">Add New Student</h2>
    
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        
        <div class="grid grid-2">
            <div class="form-group">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required
                       class="form-control">
                @error('first_name')
                    <div class="text-error">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required
                       class="form-control">
                @error('last_name')
                    <div class="text-error">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                   class="form-control">
            @error('email')
                <div class="text-error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}"
                   class="form-control">
            @error('date_of_birth')
                <div class="text-error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="school_class_id" class="form-label">Class Assignment</label>
            <select name="school_class_id" id="school_class_id" required class="form-control">
                <option value="">Select a class</option>
                @foreach($classes as $class)
                    <option value="{{ $class->id }}" {{ old('school_class_id') == $class->id ? 'selected' : '' }}>
                        {{ $class->name }} - {{ $class->grade_level }}
                    </option>
                @endforeach
            </select>
            @error('school_class_id')
                <div class="text-error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="flex justify-between items-center">
            <button type="submit" class="btn btn-primary">Add Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
