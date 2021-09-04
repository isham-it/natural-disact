


@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')

    <link href="{{ URL::asset('public/css/event.css') }}" rel="stylesheet">
@endsection

@section('content')

@if($message = Session::get('success'))
<p style="color:green">{{$message}}</p>
@endif
==================================
@foreach ($events as $event)
        <p><strong>Name : </strong> {{$event->title}}</p>
        <p><strong>Price : </strong> {{$event->description}}</p>
        <!-- creating link using the name of the route (check web.php file)  -->

        <hr>
    @endforeach




====================================
<!--<p><strong>Title : </strong> {{ $event->title }}</p>
<p><strong>description : </strong> {{ $event->description }}</p>
<p><strong>poster : </strong> {{ $event->poster }}</p>
<p><strong>date : </strong> {{ $event->date }}</p>-->

@endsection

