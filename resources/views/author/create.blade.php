@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @component('components.admin-sidebar')
            @endcomponent

            <h3>@lang('admin.author-section-title')</h3>
            <form action="{{ url('/admin/authors/create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="authorName">Author's Name</label>
                    <input type="text" name="authorName" id="authorName">
                </div>
                <div class="form-group">
                    <label for="authorEmail">Author's Email</label>
                    <input type="text" name="authorEmail" id="authorEmail">
                </div>
            </form>
        </div>
    </div>
@endsection
