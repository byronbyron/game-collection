<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('meta-title', 'Game Collection')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body role="document">
    
    @include('layouts/partials/_navbar')

    <div class="container" role="main">
        @if (Session::get('flash_message'))
            <div class="alert alert-warning">
                <p>{{ Session::get('flash_message') }}</p>
            </div>
        @endif
        
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- /.container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>