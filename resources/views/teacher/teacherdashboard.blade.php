@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ public_path('imgs/student.png') }}" class="card-img-top" alt="Videos">
                <div class="card-body">
                    <h5 class="card-title">view youtube videos</h5>
                    <a class="nav-link" href="#"> view videos</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ public_path('imgs/student.png') }}" class="card-img-top" alt="Assignments">
                <div class="card-body">
                    <h5 class="card-title">Add Assignment</h5>
                    <a class="nav-link" href="#">Upload assignment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection