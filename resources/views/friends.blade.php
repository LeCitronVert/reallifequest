@extends('layouts.app')

@section('content')

    <div class="page_header">
        <span class="big_title">{{ __('title.friends')}}.</span>
        <img src="/img/logo.png" alt="real_life_quest_logo">
    </div>

    <form action="/search" method="POST">
        {{csrf_field()}}
        <input type="text" name="query" placeholder="{{ __('friend.search') }}" />
    </form>

    <h1>{{ __('friend.rlist') }}</h1>
        @foreach($fr as $f)
            @include("res.befriend")
        @endforeach()

    <div><a href="/rankings">{{ __('friend.rankings') }}</a></div>

    <h1>{{ __('friend.flist') }}</h1>
        @foreach($fl as $f)
            @include("res.friend")
        @endforeach()
@endsection
