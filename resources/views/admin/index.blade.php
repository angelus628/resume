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
    <div class="row">
        <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
            </div>
        </div>
        <div class="col-9">
            <h3>@lang('admin.article-section-title')</h3>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>@lang('admin.table-article-title')</th>
                        <th>@lang('admin.table-article-author')</th>
                        <th>@lang('admin.table-article-tags')</th>
                    </tr>
                <thead>
                <tbody>
                    @foreach ($articles as $article)
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->tags }}</td>
                    @endforeach
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <h3>@lang('admin.author-section-title')</h3>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>@lang('admin.table-author-name')</th>
                        <th>@lang('admin.table-author-email')</th>
                        <th>@lang('admin.table-author-articles')</th>
                    </tr>
                <thead>
                <tbody>
                    <tr>
                        @foreach ($authors as $author)
                            <td>{{ $author->title }}</td>
                            <td>{{ $author->author }}</td>
                            <td>{{ $author->tags }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
