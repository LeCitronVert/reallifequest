<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Real Life Quest</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://use.fontawesome.com/67284c149c.js"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    </head>

    <body>
        @auth()
            {{App::setLocale(\Illuminate\Support\Facades\Auth::user()->lang)}}
        @endauth()


        @include('layouts.lang')

        <div class="main">
            @yield('content')
        </div>

        @include('layouts.navbar')
        <script src="/js/quests.js"></script>
        <script src="/js/select.js"></script>
    </body>
</html>
