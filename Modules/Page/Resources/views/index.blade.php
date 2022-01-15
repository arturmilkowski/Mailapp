@extends('page::layouts.master')

@section('content')
    <h1>Pages</h1>
    <p>
        This view is loaded from module: {!! config('page.name') !!}
    </p>
@endsection
