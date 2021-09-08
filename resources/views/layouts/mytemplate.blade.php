<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <linkrel="stylesheet"href="URL::asset('public/css/main.css') --}}


</head>
@include('layouts.nav')

<body>
    <div class="content">
        @yield('content')
    </div>

    @yield('scripts')


</body>

</html>
