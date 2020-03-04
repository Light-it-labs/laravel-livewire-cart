<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
        @include('layouts.header')

        <div class="mx-auto">
            @yield('content')
        </div>

        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
