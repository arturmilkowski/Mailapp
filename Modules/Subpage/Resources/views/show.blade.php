@extends('mail::layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>
    <p>
        {{ $page->content }}
    </p>
@endsection
