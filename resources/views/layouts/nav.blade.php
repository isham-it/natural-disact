<!DOCTYPE html>
<html lang="en">
<head>
 <title>navbar</title>
 <link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
 <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

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


