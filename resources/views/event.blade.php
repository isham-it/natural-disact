@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')
    <link href="{{ URL::asset('public/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/css/event.css') }}" rel="stylesheet">
@endsection

@section('content')

<p><strong>Title : </strong> {{ $event->title }}</p>
<p><strong>description : </strong> {{ $event->description }}</p>
<p><strong>poster : </strong> {{ $event->poster }}</p>
<p><strong>date : </strong> {{ $event->date }}</p>

@endsection
description
