@extends('layouts.app')

@section('content')

<div class="page_header">
    <span class="big_title">{{ __('title.home') }}.</span>
    <img src="/img/logo.png" alt="real_life_quest_logo">
</div>

<div class="container">
    <div class="homepage_header">
        <div class="homepage_header__progress_bar">
            <div class="homepage_header__progress_bar__fill"></div>
            <div class="homepage_header__progress_bar__background"></div>
        </div>
        <div class="homepage_header__banner">
            <a href="/profile/{{\Illuminate\Support\Facades\Auth::id()}}">
                <span>Voir mon profil</span>
                <span class="profile__banner__level">►</span>
            </a>
        </div>
    </div>
    @foreach($actu as $a)
        <div class="notification">
            <div class="notification__image" style="background-image: url('{{$a->User()->avatar}}')" alt="Avatar de {{$a->User()->name}}"></div>
            <div class="notification__content">
                <span class="notification__content__name">{{$a->User()->name}}</span>
                <p class="notification__content__description">{{ __('fil.' . $a->type) }}
                    @if($a->type == "questaccepted" || $a->type == "questrefused" || $a->type == "questtimeout"|| $a->type == "questcompleted")
                        <strong>{{\App\Quest::find($a->newsValue)->prompt}}</strong>
                    @endif
                    @if($a->type == "levelup")
                        <strong>{{$a->newsValue}}</strong>
                    @endif</p>
                <span class="notification__content__date">{{$a->created_at}}</span>
            </div>
        </div>
    @endforeach
</div>

@endsection
