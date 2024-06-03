@extends('layout')

@section('content')
    <h1>Show Studets</h1>

    <p>Name: {{ $student->name }}</p>
    <p>Address: {{ $student->address }}</p>

    <a href="{{ route('students.index') }}">Back to List</a>
@endsection
