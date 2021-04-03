<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ App::getLocale() }}"> <!--<![endif]-->
<head>
    @component('components.header-bootstrap')
    @endcomponent
</head>

<body id="top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Luis Angel - Resume</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if (session('status'))
                <li class="nav-item">
                    <a class="nav-link">{{ session('status') }}</a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav mr-right">
                @if(Auth::check())
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <a id="logout" class="nav-link" href="#">Cerrar sesión</a>
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('content')

    @component('components.footer-bootstrap')
    @endcomponent
</body>

</html>
