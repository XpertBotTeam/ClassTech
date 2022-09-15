@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:2%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="card-text">Adding Courses</p>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="container">
                            <form action="{{route('createcourses')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for = "coursecode">Course Code</label>
                                    <input type="text" id="coursecode" name="coursecode" class="form-control" placeholder="Courses's Code"/>
                                </div>
                                <div class="form-group">
                                    <label for = "coursename">Course Name</label>
                                    <input type="text" id="coursename" name="coursename" class="form-control" placeholder="Courses's name"/>
                                </div>
                                <div class="form-group">
                                    <label for = "semester">Semester</label>
                                    <select name="semester" id="semester" class="form-control">
                                        <option value="">Select a value</option>
                                        @foreach($semester as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
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