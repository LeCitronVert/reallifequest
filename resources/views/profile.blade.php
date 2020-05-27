@extends('layouts.app')

@section('content')
    <!--<div class="profile">
        <div class="avatar">
            <img src="{{$user->avatar}}" alt="Avatar de {{$user->name}}" />
        </div>

        <div class="infos">
            <span>{{$user->count_completedquests()}} {{ __('profile.completedquests') }}</span>
            <span>{{$user->count_sentquests()}} {{ __('profile.sentquests') }}</span>
            <span>{{$user->count_friends()}} {{ __('etc.friends') }}</span>
        </div>

        <div class="level">
            {{ ucfirst(__('etc.level')) }} {{$user->level}}
        </div>

    </div>-->

<div class="page_header">
    <span class="big_title">{{ __('title.profile') }}.</span>
    <img src="/img/logo.png" alt="real_life_quest_logo">
</div>

<div class="profile">
    <div class="profile__content">
        <div class="profile__content__user">
            <div class="profile__content__user__image" style="background-image: url('{{$user->avatar}}')"></div>
            <p>{{$user->name}}</p>
        </div>
        <div class="profile__content__separator"></div>
        <div class="profile__content__datas">
            <div class="image_text">
                <div class="image_text__image" style="background-image: url('/img/scroll.png')"></div>
                <div class="image_text__text">
                    <span>{{$user->count_completedquests()}}</span>
                    <p>completed</p>
                </div>
            </div>
            <div class="image_text">
                <div class="image_text__image" style="background-image: url('/img/send.png')"></div>
                <div class="image_text__text">
                    <span>{{$user->count_sentquests()}}</span>
                    <p>sent</p>
                </div>
            </div>
            <div class="image_text">
                <div class="image_text__image" style="background-image: url('/img/friends_2.png')"></div>
                <div class="image_text__text">
                    <span>{{$user->count_friends()}}</span>
                    <p>friends</p>
                </div>
            </div>
        </div>
    </div>
    <div class="profile__banner">
        <span>Level</span>
        <span class="profile__banner__level">{{$user->level}}</span>
    </div>
</div>

@endsection
