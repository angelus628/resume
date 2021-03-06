@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">

        @component('components.admin-sidebar')
        @endcomponent
        
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
                        <td>{{ $article->author->name }}</td>
                        <td>{{ $article->tags }}</td>
                    @endforeach
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a href="{{ url(App::getLocale() . '/articles/create') }}" class="btn btn-info">@lang('admin.new-article')</a>
            </div>
        </div>
    </div>
</div>
@endsection
