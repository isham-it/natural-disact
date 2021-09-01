<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/ask.css">


</head>

<body>
    @include('layouts.nav')

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>This is my SPECIAL footer</p>
    </footer>

    @yield('scripts')
</body>

</html>
