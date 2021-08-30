<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('home') }}">Home page</a></li>
            <li><a href="{{ url('about') }}">About us</a></li>
            <li><a href="{{ url('contact') }}">contact us </a></li>
            <li><a href="{{ url('register') }}">Register</a></li>
            <li><a href="{{ url('login') }}">Login</a></li>
            <li><a href="{{ url('event') }}">Event page</a></li>
        </ul>
    </nav>
</body>
</html>
