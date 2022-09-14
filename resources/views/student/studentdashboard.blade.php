@extends('layouts.app')

@section('content')

{{Auth::user()->role}}
@endsection