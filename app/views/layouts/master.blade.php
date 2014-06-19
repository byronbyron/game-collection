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
    <div class="top piece">
        <header>
            <div class="container">
                <div class="logo">
                    <h1><a href="/">Game Collection</a></h1>
                </div>
                @include('layouts/partials/_navigation')
            </div>
        </header>
    </div>

    <div class="main piece">
        <div class="container" role="main">
            @if (Session::get('flash_message'))
                {{ Session::get('flash_message') }}
            @endif

            @yield('content')
        </div>
    </div>
    
</body>
</html>