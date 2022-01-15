@extends('mail::layouts.master')

@section('content')
    <h1>Mail App</h1>
    <p>
        <a href="{{ route('dashboard') }}" title="">Dashboard</a> |
        <a href="{{ route('mails.create') }}" title="">Create</a>
    </p>
@endsection
