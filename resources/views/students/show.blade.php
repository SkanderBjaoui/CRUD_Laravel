@extends('layout')

@section('content')
<div class="card">
    <div class="mb-4">
        <a href="{{ route('students.index') }}" class="btn btn-secondary">← Back to Students</a>
    </div>
    
    <h2 style="font-size: 20px; font-weight: 600; color: #2c3e50; margin-bottom: 24px;">Student Details</h2>
    
    <div class="grid grid-2">
        <div class="card" style="background-color: #f8f9fa;">
            <h3 style="font-size: 16px; font-weight: 600; color: #495057; margin-bottom: 16px;">Personal Information</h3>
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <div>
                    <strong style="color: #495057;">Name:</strong>
                    <span>{{ $student->first_name }} {{ $student->last_name }}</span>
                </div>
                <div>
                    <strong style="color: #495057;">Email:</strong>
                    <span>{{ $student->email }}</span>
                </div>
                <div>
                    <strong style="color: #495057;">Date of Birth:</strong>
                    <span>{{ $student->date_of_birth ? \Carbon\Carbon::parse($student->date_of_birth)->format('F d, Y') : 'Not specified' }}</span>
                </div>
            </div>
        </div>
        
        <div class="card" style="background-color: #f8f9fa;">
            <h3 style="font-size: 16px; font-weight: 600; color: #495057; margin-bottom: 16px;">Class Information</h3>
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <div>
                    <strong style="color: #495057;">Class:</strong>
                    <span>{{ $student->schoolClass->name ?? 'Not assigned' }}</span>
                </div>
                <div>
                    <strong style="color: #495057;">Grade Level:</strong>
                    <span>{{ $student->schoolClass->grade_level ?? 'N/A' }}</span>
                </div>
                @if($student->schoolClass && $student->schoolClass->description)
                    <div>
                        <strong style="color: #495057;">Description:</strong>
                        <span>{{ $student->schoolClass->description }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid #dee2e6;">
        <div style="display: flex; gap: 12px;">
            <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Edit Student</a>
            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete Student</button>
            </form>
        </div>
    </div>
</div>
@endsection
