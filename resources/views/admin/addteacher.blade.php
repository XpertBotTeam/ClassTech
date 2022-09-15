@extends('layouts.app')

@section('content')

<div class="container" style="padding-top:2%">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <p class="card-text">Adding Teachers</p>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="container">
                            <form action="{{route('createteacher')}}" method="POST">
                                @csrf 
                                <div class="form-group">
                                        <label for = "name">Teacher's Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Teacher's name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for = "email">Teacher's Email</label>
                                        <input type="text" id = "email" name="email" class="form-control" placeholder="Teacher's Email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for = "password">Teacher's Password</label>
                                        <input type="password" id = "password" name="password" class="form-control" placeholder="Teacher's Password"/>
                                    </div>
                                    <div class="form-group">
                                        <label for = "role">Role</label>
                                        <select name="role" class="form-control">
                                            <option>Select a Role</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success">Save</button>
                                    </div>
                                </form>
                    <div>
                        <a href="{{route('home')}}" class="nav-link">Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection