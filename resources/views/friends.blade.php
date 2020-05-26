@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('title.friends') }}</div>

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
