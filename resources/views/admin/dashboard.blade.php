@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://img.icons8.com/color/400/man_reading_a_book.png" class="card-img-top" alt="add student" style="width:250px;height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title">Add Student</h5>
                        <button class="btn btn-info"><a class="nav-link" href="{{ route('student') }}"> Add Student</a></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://img.icons8.com/external-wanicon-two-tone-wanicon/400/external-teacher-online-learning-wanicon-two-tone-wanicon.png" class="card-img-top" alt="..." style="width:250px;height: 250px;">
                    <div class="card-body">
                    <h5 class="card-title">Add Teacher</h5>
                    <button class="btn btn-info"><a class="nav-link" href="{{ route('teacher') }}"> Add Teacher</a></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/300/external-course-resume-flaticons-lineal-color-flat-icons.png" class="card-img-top" alt="..." style="width:250px;height: 250px;">
                    <div class="card-body">
                    <h5 class="card-title">Add Course</h5>
                    <button class="btn btn-info"><a class="nav-link" href="#"> Add Courses</a></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://img.icons8.com/external-fauzidea-blue-fauzidea/300/external-calendar-back-to-school-fauzidea-blue-fauzidea.png" class="card-img-top" alt="..." style="width:250px;height: 250px;">
                    <div class="card-body">
                    <h5 class="card-title">Add Semester</h5>
                    <button class="btn btn-info"><a class="nav-link" href="{{route('semesterview')}}"> Add Semester</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
