@extends('mail::layouts.master')

@section('content')
    <h1>Create mail</h1>
    <p>
        <form action="{{ route('mails.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p>
                <label for="from">From</label>
                <input type="text" id="from" name="from" value="{{ old('from') }}" placeholder="Field is required" required>
                @error('from')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <p>
                <label for="to">To</label>
                <input type="text" id="to" name="to" value="{{ old('to') }}" placeholder="Field is required" required>
                @error('to')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <p>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Field is required" required>
                @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <p>
                <label for="content">Content</label>
                <textarea id="content" name="content" placeholder="Field is required" required>{{ old('content') }}</textarea>
                @error('content')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </p>
            <a href="{{ route('mails.index') }}" title="Home page">Cancel</a> |
            <button type="submit">Send</button>
        </form>
    </p>
@endsection