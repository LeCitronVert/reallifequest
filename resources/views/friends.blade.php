@extends('layouts.app')

@section('content')

    <div class="page_header">
        <span class="big_title">{{ __('title.friends')}}.</span>
        <img src="/img/logo.png" alt="real_life_quest_logo">
    </div>

    <form action="/search" method="POST" class="searchbar">
        {{csrf_field()}}
        <input type="text" name="query" placeholder="{{ __('friend.search') }}" class="round_input" />
    </form>

    <p class="center_title">{{ __('friend.rlist') }}</p>
        <div class="friends">
            @foreach($fr as $f)
                @include("res.befriend")
            @endforeach()
        </div>

    <p class="center_title">{{ __('friend.flist') }}</p>
        <div class="friends">
            @foreach($fl as $f)
                @include("res.friend")
            @endforeach()
        </div>

    <a href="/rankings" class="ranking_link" style="background-image: url('/img/first.png')"></a>
    
@endsection
