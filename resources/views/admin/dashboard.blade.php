@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ public_path('imgs/student.png') }}" class="card-img-top" alt="add student">
                    <div class="card-body">
                        <h5 class="card-title">Add Student</h5>
                        <a class="nav-link" href="{{ route('student') }}"> Add Student</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Add Teacher</h5>
                    <a class="nav-link" href="{{ route('teacher') }}"> Add Teacher</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Add Course</h5>
                    <a class="nav-link" href="#"> Add Courses</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Add Semester</h5>
                    <a class="nav-link" href="#"> Add Semester</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
