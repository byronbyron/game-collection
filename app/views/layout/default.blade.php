<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Collection</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{ link_to_route('games.index', 'Game Collection', null, ['class' => 'navbar-brand']) }}
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>{{ link_to_route('games.index', 'Games') }}</li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <!-- /.container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>