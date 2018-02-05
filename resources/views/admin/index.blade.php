@extends('layouts.admin')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url(App::getLocale() . '/dashboard') }}">Luis Angel - Resume</a>
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
                <form action="{{ url(App::getLocale() . '/logout') }}" method="post">
                    {{ csrf_field() }}
                    <a id="logout" class="nav-link" href="#">Cerrar sesión</a>
                </form>
            </li>
            @endif
        </ul>
    </div>
</nav>
<div class="container-fluid">
</div>
@endsection
