@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">quetes</div>
        <a href="/quest/create">
            <button class="btn create-quest">{{ __('btn.createquest') }}</button>
        </a>

        @foreach($ql as $q)
            @include("res.quest")
        @endforeach
    </div>
@endsection
