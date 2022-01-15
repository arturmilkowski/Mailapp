<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Mail</title>
       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/mail.css') }}"> --}}
    </head>
    <body>
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @yield('content')
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/mail.js') }}"></script> --}}
    </body>
</html>
