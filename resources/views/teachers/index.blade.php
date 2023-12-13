@extends('layouts.crud')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>List of Teachers</h1>
                <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add new teacher</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                         <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>
                                <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-primary">Show</a>
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Ishonchingiz komilmi?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $teachers->links() }}

            </div>
        </div>
    </div>
@endsection
