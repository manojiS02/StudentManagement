@extends('layout')

@section('content')
    <h1>Edit Student</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" required>
        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address', $student->address) }}" required>
        <button type="submit">Submit</button>
    </form>
@endsection
