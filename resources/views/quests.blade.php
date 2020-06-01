@extends('layouts.app')

@section('content')

<div class="page_header">
    <span class="big_title">{{ __('title.quests') }}.</span>
    <img src="/img/logo.png" alt="real_life_quest_logo">
</div>

    <div class="container">

        <div id="quests_select" onchange="filterquest()" class="custom-select">
            <select>
                <option value="all">{{ __('quest.all') }}</option>
                <option value="all">{{ __('quest.all') }}</option>
                <option value="request">{{ __('quest.request') }}</option>
                <option value="completed">{{ __('quest.completed') }}</option>
                <option value="pending">{{ __('quest.pending') }}</option>
                <option value="expired">{{ __('quest.expired') }}</option>
            </select>
        </div>

        <div id="quests_all" class="quest_list">
            @foreach($ql as $q)
                @include("res.quest")
            @endforeach
        </div>

        <div id="quests_request" class="quest_list hiddendefault">
            @foreach($qr as $q)
                @include("res.quest")
            @endforeach
        </div>

        <div id="quests_completed" class="quest_list hiddendefault">
            @foreach($qc as $q)
                @include("res.quest")
            @endforeach
        </div>

        <div id="quests_pending" class="quest_list hiddendefault">
            @foreach($qp as $q)
                @include("res.quest")
            @endforeach
        </div>

        <div id="quests_expired" class="quest_list hiddendefault">
            @foreach($qe as $q)
                @include("res.quest")
            @endforeach
        </div>

    </div>
@endsection
