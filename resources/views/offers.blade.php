@extends('layouts.mytemplate')

@section('title', 'Detail page')
@section('css')
<link rel="stylesheet" href="ask.css">
@endsection


<body id="offerBody">
    @section('content')

    @if ($message = Session::get('success'))
    <p style="color:green">{{ $message }}</p>
    @endif

    <a id="button" href="{{ url('new-offer') }}">ADD AN OFFER</a>


    @foreach ($offers as $offer)
    <p><strong>Title : </strong> {{ $offer->title}}</p>
    <a href="{{ route('details.offer', [$offer->id])}}">Details</a>
    <a href="{{ route('update.offer', [$offer->id])}}">Edit</a>
    <a href="{{ route('delete.offer', [$offer->id])}}">Delete</a>
    <a href="{{ route('accept.accord', [$offer->id, $offer->title])}}">Accept</a>
    <hr>
    @endforeach

    @endsection
