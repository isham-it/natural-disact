@extends('layouts.mytemplate')

@section('title', 'home page')



@section('content')

   <h1>HOME PAGE</h1>

<nav>
    <ul>

        <li><a href="{{ url('offers') }}">offerrrrrs</a></li>
        <li><a href="{{ url('asks') }}">asksssss</a></li>

    </ul>
</nav>

@endsection
