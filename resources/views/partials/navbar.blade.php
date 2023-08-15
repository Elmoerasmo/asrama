<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav id="navbar" class="navbar">
  @if (Route::has('login'))
  <ul>
    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
    <li><a class="nav-link scrollto" href="#about">About</a></li>
    <li><a class="nav-link scrollto" href="#services">Program</a></li>
    <li><a class="nav-link scrollto" href="#portfolio">Foto-Foto</a></li>
    <li><a class="nav-link scrollto" href="#team">Pembina</a></li> 
    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              @auth
                  <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline ">Home</a>
              @else
                  <li><a href="{{ route('login') }}" class="getstarted scrollto">Log in</a></li>

                  @if (Route::has('register'))
                      <li><a href="{{ route('register') }}" class="getstarted scrollto">Register</a></li>
                  @endif
              @endauth
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
  @endif
</nav><!-- .navbar -->

</body>
</html>
