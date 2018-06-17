<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
          <nav class = "navbar has-shadow">
            <div class="container">

                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/tami_1.jpg')}}" alt="DevMarketer Logo" />
                    </a>

                    <div class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                   
                </div>

                    <div class="navbar-menu" id="navMenu">

                        <div class="navbar-start">
                        
                            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                          
                        </div>

                        <div class="navbar-end" >
                            @if (!Auth::guest())
                                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                                <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable is-aligned-right">
                                    <div class="navbar-link" href="">
                                        Hey Alex
                                    </div>
                                    <ul class="navbar-dropdown is-boxed">
                                        <li><a class="navbar-item" href="">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>    
                                        Profile</a></li>
                                        <li><a class="navbar-item" href="">
                                        <span class="icon"><i class="fa fa-fw m-r-10  fa-bell"></i></span>    
                                        Notifications</a></li>
                                        <li><a class="navbar-item" href="">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>    
                                        Settings</a></li>
                                        <hr class="navbar-divider">
                                        <li><a class="navbar-item" href="">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>    
                                        Logout</a></li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
            </div>
          </nav>

        
            @yield('content')
        
    </div>
</body>
</html>
