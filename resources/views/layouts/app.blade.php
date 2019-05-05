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
        <nav class="nav">
            <div class="nav-big">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('images/logo.jpg')}}" alt="logo" class="nav-big-logo" style="width: 65px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">New</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Articles
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="my-2 my-lg-0">
                                @if(Auth::guest())
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sing up<i class="fas fa-user-plus"></i></button>
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in<i class="fas fa-sign-in-alt"></i></button>
                                @else
                                    <a href="#">Alex Nasriddinus</a>
                                 @endif
                                    
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>



































