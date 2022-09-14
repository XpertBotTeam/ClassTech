@extends('layouts.app')

@section('content')
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg narvbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form  class="form-inline my-2 my-lg-0" method="GET" action="{{ route('result')}}">
                            <input type="search" class="form-control mr-am-2" placeholder="search" name="search_query" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        @foreach($videoLists->items as $key => $item)
        <div class="col-4">
            <a href="{{route('watch',$item->id->videoId)}}">
                <div class="card mb-4">
                    <img src="{{ $item->snippet->thumbnails->medium->url }}" class="img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-titled">{{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}</h5>
                    </div>
                    <div class="card-footer text-muted">
                        Published at {{ date('d M Y', strtotime($item->snippet->publishTime)) }}
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection