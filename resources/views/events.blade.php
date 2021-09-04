@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

@endsection

<body id="eventBody">
@section('content')


<div id="event_div">

@foreach ($events as $event)

<p>Date : {{$event->date}}</p>
<p>Name : {{$event->title}}</p>
<p>Description :  {{$event->description}}</p>
<p><img id="event_img" src="{{ $event->poster }}" width="500px"></p>
<!-- creating link using the name of the route (check web.php file)  -->

@endforeach
</div>





@endsection

