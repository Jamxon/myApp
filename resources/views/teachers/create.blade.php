@extends('layouts.crud')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Create Teacher</h1>
        </div>
        <div>
            <form action="{{ route('teachers.store') }}" method="post">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Name kiriting">
                    @error('name') <span class="accordion-body link-danger">{{ $message }}</span> @enderror
                <input type="email" name="email" class="form-control" placeholder="Email kiriting">
                @error('email') <span class="accordion-body link-danger">{{ $message }}</span> @enderror
                <input type="text" name="phone" class="form-control" placeholder="Phone kiriting">
                <input type="text" name="address" class="form-control" placeholder="Address kiriting">
                <input type="submit" value="Saqlash" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
