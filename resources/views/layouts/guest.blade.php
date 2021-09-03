<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <--<link rel="stylesheet" href="{{ asset('css/main.css') }} ">
        
        <link rel="stylesheet" href="{{ asset('css/register.css') }} ">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

    <nav class="nav-bar">
        <div class="logo_div">
            <img id="logo" src="/img/logo.png" alt="Logo natural disaster">
            <span id="dis" class="disact">DIS'</span>
            <span id="act" class="disact">ACT</span>
        </div>
        <ul>
            <li><a href="{{ url('home') }}">Home page</a></li>
            <li><a href="{{ url('about') }}">About us</a></li>
            <li><a href="{{ url('contact') }}">contact us </a></li>
            <li><a href="{{ url('register') }}">Register</a></li>
            <li><a href="{{ url('login') }}">Login</a></li>
            <li><a href="{{ url('event') }}">Event page</a></li>
        </ul>
    </nav>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <footer>blablabla</footer>

    </body>
</html>
