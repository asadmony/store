<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('title')


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/uikit/css/theme.css') }}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/uikit/css/demo.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- plugin: fancybox  -->
    <script src="{{asset('mobile/plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
    <link href="{{ asset('mobile/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Bootstrap4 files-->
    {{-- <script src="{{ asset('mobile/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('mobile/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/> --}}
    <!-- custom style -->
    <link href="{{ asset('mobile/css/mobile.css') }}" rel="stylesheet" type="text/css"/>
    <!-- jQuery -->
    {{-- <script src="{{ asset('mobile/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script> --}}

    <!-- custom javascript -->
    {{-- <script src="{{ asset('mobile/js/script.js') }}" type="text/javascript"></script> --}}

    {{-- own page css --}}
    @stack('css')

    <style>
        body {
            font-family: 'Nunito';
        }
        a:hover{
            text-decoration: none;
        }
        .logo{
            max-height: 80px;
            margin: 0;
            padding: 0;
        }
        .appdiv{
            margin-top: 120px !important;
        }
        @media screen and (max-width:471px){
            .navbar-search{
                width: 100%;
            }
            .logo{
                max-height: 50px;
                margin: 0;
                padding: 0;
            }
        }
        @media screen and (max-width:768px){
            .bottomMenu {
                display: block !important;
            }
            .bottomMenu a{
                color: black;
            }
            .bottomMenu a:hover{
                transform: scale(1.2);
            }
            .appdiv{
                margin-bottom: 50px !important;
            }
        }
        @media screen and (min-width:769px){
            .bottomMenu {
                display: none !important;
            }
        }
        .wrapper {
            display: block;
        }


    </style>
</head>
<body>
    <div id="app">
        <div class="container-fluid m-0 p-0 appdiv">
            {{-- @include('layouts.topBanner') --}}
            @include('layouts.navbar')
            @include('layouts.sideBar')


            @include('layouts.topMenuBar')

            @yield('content')
        </div>
    </div>
    <div class="bottomMenu">
        <nav class="navbar navbar-expand-md fixed-bottom navbar-light bg-light my-0 py-0">
            <div class="container d-flex justify-content-between" style="height: 50px">
                <a class="text-center w-25 d-flex flex-column" href=""> <i class="fa fa-home"></i> Home</a>
                <a class="text-center w-25 d-flex flex-column" href=""> <i class="fa fa-heart"></i>  Favorite</a>
                <a class="text-center w-25 d-flex flex-column" href=""> <i class="fa fa-shopping-cart"></i>  Cart</a>
                <a class="text-center w-25 d-flex flex-column" href=""> <i class="fa fa-user"></i> User </a>
            </div>
        </nav>
    </div>
    <script>
    </script>
    @stack('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/uikit/js/demo.js') }}"></script>
    <script src="{{ asset('frontend/uikit/js/theme.js') }}"></script>
</body>
</html>
