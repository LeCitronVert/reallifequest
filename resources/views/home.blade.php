@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">maison</div>

    @foreach($actu as $a)
        <div class="news">
            <img src="{{$a->User()->avatar}}" alt="Avatar de {{$a->User()->name}}" />
            <span class="news_user">{{$a->User()->name}}</span>
            <span class="news_text">{{ __('fil.' . $a->type) }}</span>
            @if($a->newsValue != 0)
                <span class="news_value">{{$a->newsValue}}</span>
            @endif
        </div>
    @endforeach
</div>
@endsection
