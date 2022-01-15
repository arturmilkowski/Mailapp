@extends('page::layouts.master')

@section('content')
    <h1>Create page</h1>
    <p>
        <form action="{{ route('pages.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p>
                <label for="slug">Slug</label>
                <input type="slug" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Field is required" required>
                @error('slug')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <p>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Field is required" required>
                @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <p>
                <label for="content">Content</label>
                <textarea id="content" name="content" placeholder="Field is required">{{ old('content') }}</textarea>
                @error('content')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <a href="{{ route('pages.index') }}" title="Pages">Cancel</a> |
            <button type="submit">Add</button>
        </form>
    </p>
@endsection
