@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('title.home') }}</div>

    <pre>
        {{var_dump(session()->all())}}
        {{\Illuminate\Support\Facades\App::getLocale()}}
    </pre>

    @foreach($actu as $a)
        @include("res.actu")
    @endforeach
</div>
@endsection
