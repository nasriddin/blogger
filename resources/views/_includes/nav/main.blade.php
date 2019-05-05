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
                            <a href="{{route('register')}}"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sing up<i class="fas fa-user-plus"></i></button></a>
                            <a href="{{route('login')}}"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in<i class="fas fa-sign-in-alt"></i></button></a>
                        @else
                            <a href="#">Alex Nasriddinus</a>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="{{route('manage.dashboard')}}">Manage</a>
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log out</a>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>