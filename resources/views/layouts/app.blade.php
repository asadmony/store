<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- own page css --}}
        @stack('css')

        <style>
            body {
                font-family: 'Nunito';
            }
            a:hover{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="container-fluid m-0 p-0">
                @include('layouts.navbar')

                @yield('content')
            </div>
        </div>
    @stack('js')
    </body>
</html>
