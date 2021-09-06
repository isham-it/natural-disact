@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

@endsection

<body id="eventBody">
@section('content')


<h1 class="fw-light text-center text-lg-start mt-4 mb-0">Event announcements </h1>
<br>
<div class="container1">
@foreach ($events as $event)
<div class="row text-center text-lg-start">

    <div class="col-lg-3 col-md-4 col-6">
    <p><strong>{{$event->date}}</strong></p>
    <a href="#" class="d-block mb-4 h-100">
    <img class="img-fluid img-thumbnail" src="{{ $event->poster}}" alt="">
    <p><strong>{{$event->title}}</strong></p>
    <p><strong>{{$event->description}}</strong></p>
    </a>
  </div>
</div>

</div>

@endforeach

@endsection
