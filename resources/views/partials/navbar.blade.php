<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css"> 
{{-- F --}}
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="app" class="hero">
<header id="header" class="fixed-top "> 
    <div class="container d-flex align-items-center">
    
    <h1 class="logo me-auto"><a href="{{url('/')}}">Arsha</a></h1>
    <nav id="navbar" class="navbar">
    @if (Route::has('login'))
    <ul>
        <li><a class="nav-link scrollto" href="{{url('/#about')}}">About</a></li>
        <li><a class="nav-link scrollto" href="{{url('/#services')}}">Program</a></li>
        <li><a class="nav-link scrollto" href="{{url('/#portfolio')}}">Foto-Foto</a></li>
        <li><a class="nav-link scrollto" href="{{url('/#team')}}">Pembina</a></li> 
        <li><a class="nav-link scrollto" href="{{url('/#contact')}}">Contact</a></li>
        <li><a class="nav-link scrollto" href="{{url('/#book-now')}}">Book Now</a></li>
            @guest
            @if (Route::has('login'))
                <li class="">
                    <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="getstarted scrollto" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="dropdown">
                <a id="navbarDropdown" class=""  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}&nbsp;
                <span class="bi bi-chevron-down"></span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('profile')}}">Profile</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                    </form>
                    </li>
                </ul>
                    
            </li>
        @endguest

    </ul>
    
    <i class="bi bi-list mobile-nav-toggle"></i>
    @endif
    </nav><!-- .navbar -->
    </div>
</header>
</div>
<main class="">
    @yield('content')
</main>
</body>
</html>
