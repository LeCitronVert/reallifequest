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

    <div class="friends">
    @foreach($users as $user)
        @if($user->id != \Illuminate\Support\Facades\Auth::id())
            @include('res.request',[ "user" => $user])
        @endif
    @endforeach
    </div>
@endsection
