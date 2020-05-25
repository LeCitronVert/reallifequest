@extends('layouts.app')

@section('content')

    @foreach($fl as $f)
        @include("res.friend")
    @endforeach()
@endsection
