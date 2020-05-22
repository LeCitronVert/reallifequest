@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">ajouter</div>

        <form action="/quest/add" method="post" style="display: flex;flex-direction: column;">
            {{csrf_field()}}
            <input type="text" name="prompt" placeholder="{{ __('form.prompt') }}" />
            <input type="text" name="desc" placeholder="{{ __('form.desc') }}" />
            {{ __('form.difficulty') }} : <select name="difficulty">
                <option value="easy">{{ __('form.easy') }}</option>
                <option value="medium">{{ __('form.medium') }}</option>
                <option value="hard">{{ __('form.hard') }}</option>
            </select>

            @foreach($fl as $f)
                <div>
                    <input type="checkbox" name={{"friend[" . $f->returnFriend()->id . "]"}} />
                    <img src="{{$f->returnFriend()->avatar}}" alt="Avatar de {{$f->returnFriend()->name}}" />
                    <span class="friend_name">{{$f->returnFriend()->name}}</span>
                </div>
            @endforeach()

            <input type="submit" value="{{ __('form.submit') }}" />
        </form>
    </div>
@endsection
