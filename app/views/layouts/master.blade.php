<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('meta-title', 'Game Collection')</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <div class="container" role="main">
        @include('layouts/partials/_navigation')

        @if (Session::get('flash_message'))
            {{ Session::get('flash_message') }}
        @endif

        @yield('content')
    </div>
    
</body>
</html>