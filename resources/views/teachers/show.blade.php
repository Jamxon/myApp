@extends('layouts.crud')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Show Teacher</h1>
                <a href="{{ route('teachers.index') }}" class="btn btn-primary">Back</a>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ $teacher->id }}</td>
                    </tr>
                    <tr>
                        <th>First name</th>
                        <td>{{ $teacher->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $teacher->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $teacher->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $teacher->address }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
