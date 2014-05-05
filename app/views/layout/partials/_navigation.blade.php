<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to('/', 'Game Collection', ['class' => 'navbar-brand']) }}
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>{{ link_to_route('games.index', 'Games') }}</li>
                @if (Auth::guest())
                <li>{{ link_to('login', 'Login') }}</li>
                @else
                <li>{{ link_to('logout', 'Logout') }}</li>
                @endif
            </ul>

        </div>
        <!-- /.nav-collapse -->
    </div>
</div>