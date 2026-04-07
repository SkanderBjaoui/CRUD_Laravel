@extends('layout')

@section('content')
<div class="card">
    <div class="flex justify-between items-center mb-6">
        <h2 style="font-size: 20px; font-weight: 600; color: #2c3e50;">Students</h2>
        <a href="{{ route('students.create') }}" class="btn btn-primary">
            + Add New Student
        </a>
    </div>
    
    @if($students->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Date of Birth</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>
                            <strong>{{ $student->first_name }} {{ $student->last_name }}</strong>
                        </td>
                        <td>{{ $student->email }}</td>
                        <td>
                            @if($student->schoolClass)
                                <span>{{ $student->schoolClass->name }}</span>
                                <br>
                                <small class="text-muted">{{ $student->schoolClass->grade_level }}</small>
                            @else
                                <span class="text-muted">Not assigned</span>
                            @endif
                        </td>
                        <td>
                            {{ $student->date_of_birth ? \Carbon\Carbon::parse($student->date_of_birth)->format('M d, Y') : '—' }}
                        </td>
                        <td>
                            <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-secondary">View</a>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div style="text-align: center; padding: 40px 0;">
            <p class="text-muted" style="margin-bottom: 20px;">No students found.</p>
            <a href="{{ route('students.create') }}" class="btn btn-primary">
                Add Your First Student
            </a>
        </div>
    @endif
</div>
@endsection
