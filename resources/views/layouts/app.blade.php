<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome to our blog page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="nav-little">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tel: +998998158661</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mail: n.bektmeirov@student.inha.uz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Follow us: <i class="fab fa-instagram"></i><i class="fab fa-telegram"></i><i class="fab fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        @include('_includes.nav.main')

        {{--@include('_includes.nav.manage')--}}


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>



































