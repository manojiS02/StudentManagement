@extends('layout')

@section('content')
    <h1>Students</h1>
    <a href="{{ route('students.create') }}">Add new student</a>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">Show</a>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
