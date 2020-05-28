@extends('layouts.app')

@section('content')

    <div class="page_header">
        <span class="big_title">{{ __('title.ranks') }}.</span>
        <img src="/img/logo.png" alt="real_life_quest_logo">
    </div>

    @foreach($fl as $f)
        @include("res.friend")
    @endforeach()
@endsection
