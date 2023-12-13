@extends('layouts.crud')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Teacher</h1>
        </div>
        <div>
            <form action="{{ route('teachers.update', $teacher->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="text" value="{{ $teacher->name  }}" name="name" class="form-control" placeholder="Name kiriting">
                <input type="email" value="{{ $teacher->email  }}" name="email" class="form-control" placeholder="Email kiriting">
                <input type="text" value="{{ $teacher->phone  }}" name="phone" class="form-control" placeholder="Phone kiriting">
                <input type="text" value="{{ $teacher->address  }}" name="address" class="form-control" placeholder="Address kiriting">
                <input type="submit" value="Saqlash" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
