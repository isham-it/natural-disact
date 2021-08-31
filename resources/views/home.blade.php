@extends('layouts.mytemplate')

@section('title', 'home page')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">


@section('content')
   <h1>home page</h1>

<nav>
    <ul>

        <a href="{{ url('asks') }}">ask-- </a>
        <a href="{{ url('offers') }}">offers</a>

    </ul>
</nav>

@endsection
