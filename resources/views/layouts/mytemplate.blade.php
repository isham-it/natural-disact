<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">
</head>

<body>
    @include('layouts.nav')


    <div class="content">
        @yield('content')
   </div>

   @include('layouts.footer')

    @yield('scripts')
</body>

</html>
