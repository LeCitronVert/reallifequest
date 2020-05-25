@extends('layouts.app')

@section('content')
<div class="form_page">
    <form method="POST" action="{{ route('login') }}" class="form_page__form">
        @csrf

        <span class="big_title">{{ __('login.') }}</span>

        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="round_input" placeholder="Username or email address" style="background-image: url('./img/avatar_2.png')">
        
        <input id="password" type="password" name="password" required autocomplete="current-password" class="round_input" placeholder="Password" style="background-image: url('./img/locker_2.png')">
        
        <div class="form_page__form__actions">
            <button type="submit" class="button_full">{{ __('Login') }}</button>
            <a href="/register" class="button_empty">{{ __('Register') }}</a>
        </div>

    </form>
</div>
@endsection
