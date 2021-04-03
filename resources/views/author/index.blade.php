@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @component('components.admin-sidebar')
            @endcomponent

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
            <div class="form-group">
                <a href="{{ url('/authors/create') }}" class="btn btn-info">@lang('admin.new-author')</a>
            </div>
        </div>
    </div>
@endsection
