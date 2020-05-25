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


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/backend.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/67284c149c.js"></script>
</head>
<body>
    @include('layouts.lang')

    <div class="main">
        @yield('content')
    </div>

    @include('layouts.navbar')
</body>
</html>
