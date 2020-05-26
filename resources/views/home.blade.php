@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">maison</div>

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
    @endforeach
</div>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="button_full">{{ __('Logout') }}</button>
<form>
@endsection
