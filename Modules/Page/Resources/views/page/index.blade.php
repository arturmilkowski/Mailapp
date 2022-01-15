@extends('page::layouts.master')

@section('content')
    <h1>Pages</h1>
    <p>
        <a href="{{ route('dashboard') }}" title="">Dashboard</a> |
        <a href="{{ route('pages.create') }}" title="">Create</a>
    </p>
    <ul>
    @forelse ($pages as $page)
        <li>
            @if ($page->slug == 'index')
            <a href="{{ route('subpage') }}" title="Show">{{ $page->title }}</a>    
            @else
            <a href="{{ route('subpage', [$page->slug]) }}" title="Show">{{ $page->title }}</a>
            @endif
        </li>
    @empty
        <li>No pages</li>
    </ul>
    @endforelse
@endsection
