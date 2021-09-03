@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')
    <link href="{{ URL::asset('public/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/css/event.css') }}" rel="stylesheet">
@endsection

@section('content')

@foreach ($events as $event)


<p><strong>Title : </strong> {{ $event->title }}</p>




@endforeach






@endsection
