@extends('layouts.app')

@section('content')

    <div class="card-header">{{ __('title.ranks') }}</div>

    @foreach($fl as $f)
        @include("res.friend")
    @endforeach()
@endsection
