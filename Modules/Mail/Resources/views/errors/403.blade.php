@extends('mail::layouts.master')

@section('content')
    <h1>403 | Forbidden</h1>
    <p>You have been banned.</p>
    <form action="{{ route('logout') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @auth
        <button type="submit">{{ __('Logout') }}</button>
        @endauth
    </form>
@endsection
