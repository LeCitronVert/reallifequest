@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        @if($user->id != \Illuminate\Support\Facades\Auth::id())
            @include('res.request',[ "user" => $user])
        @endif
    @endforeach
@endsection
