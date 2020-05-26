@extends('layouts.app')

@section('content')
    <div class="profile">
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

        @auth()
            @if($user->id == \Illuminate\Support\Facades\Auth::id())
                <form action="/profile/avatar" method="post" enctype="multipart/form-data">
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif


                    @csrf
                    Changer d'avatar :<br>
                    <input type="file" name="avatar" required>

                    <input type="submit">
                </form>

            @endif()
        @endauth()

    </div>

@endsection
