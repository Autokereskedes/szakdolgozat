<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mercedes Mercy</title>
    <link rel="icon" href="{{url('images/logo_trp.png')}}" type="image/icon type">

    <!-- links -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>

<body class="antialiased">
    <main>
        <header>
            <a href="{{url('/')}}"><img src="{{url('images/logo.jpg')}}"  id="header_logo" class="photo" width="100" height="100"></a></li>
            <!--<img src="{{url('images/logo.jpg')}}"  id="header_logo" class="photo" width="100" height="100">-->
            <h1 id="nevunk">Mercedes Mercy</h1>
        </header>
        <nav>
            <ul>
                <li><a id="nav_hover" href="{{url('/')}}">Kezdőlap</a></li>
                <li><a id="nav_hover" href="{{url('/model')}}">Konfigurátor</a></li>
                <li id="user">@if (Route::has('login'))
                    @auth
                        <a id="nav_hover" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profil</a>
                    @else
                        <a id="nav_hover" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelenetkezés</a>

                        @if (Route::has('register'))
                            <a id="nav_hover" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                        @endif
                    @endauth
                    @endif
                </li>
            </ul>
        </nav>