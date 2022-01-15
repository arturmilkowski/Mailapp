@extends('page::layouts.master')

@section('content')
    <h1>Pages</h1>
    <p>
        This view is loaded from module: {!! config('page.name') !!}
    </p>
    <p>
        <a href="{{ route('pages.create') }}" title="">Create</a>
    </p>
    <ul>
    @forelse ($pages as $page)
        <li>{{ $page->title }}</li>
    @empty
        <li>No pages</li>
    </ul>
    @endforelse
@endsection
