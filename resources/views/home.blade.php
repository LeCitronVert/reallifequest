@extends('layouts.app')

@section('content')

<div class="page_header">
    <span class="big_title">{{ __('title.home') }}.</span>
    <img src="/img/logo.png" alt="real_life_quest_logo">
</div>

<div class="container">
    @foreach($actu as $a)
        <div class="news">
            <img src="{{$a->User()->avatar}}" alt="Avatar de {{$a->User()->name}}" />
            <span class="news_group">
                <span class="news_user">{{$a->User()->name}}</span>
                <span class="news_text">{{ __('fil.' . $a->type) }}</span>
                @if($a->type == "questaccepted" || $a->type == "questrefused" || $a->type == "questtimeout")
                    <span class="news_value">{{\App\Quest::find($a->newsValue)->prompt}}</span>
                @endif
                @if($a->type == "levelup")
                    <span class="news_value">{{$a->newsValue}}</span>
                @endif
            </span>
        </div>
        <div class="notification">
            <div class="notification__image" style="background-image: url('{{$a->User()->avatar}}')" alt="Avatar de {{$a->User()->name}}"></div>
            <div class="notification__content">
                <span class="notification__content__name">{{$a->User()->name}}</span>
                <p class="notification__content__description">{{ __('fil.' . $a->type) }}</p>
                <span class="notification__content__date">22/05/2020</span>
            </div>
        </div>
    @endforeach
</div>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="button_full">{{ __('Logout') }}</button>
<form>
@endsection
