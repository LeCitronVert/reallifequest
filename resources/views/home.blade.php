@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">maison</div>

    @foreach($actu as $a)
        @include("res.actu")
    @endforeach
</div>
@endsection
