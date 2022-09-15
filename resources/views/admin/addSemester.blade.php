@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:2%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="card-text">Adding Semesters</p>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="container">
                            <form action="{{route('createsemester')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for = "name">Semester Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Semester's name"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection