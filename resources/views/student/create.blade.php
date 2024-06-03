@extends('layout')

@section('content')
    <h1>Add student</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}" required>
        <button type="submit">Submit</button>
    </form>
@endsection
