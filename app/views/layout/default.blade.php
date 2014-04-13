<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games Collection</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="nav navbar-default" role="navigation">
            <div class="navbar-header">
                {{ link_to_route('games.index', 'Games Collection', null, ['class' => 'navbar-brand']) }}
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>