@extends('layouts.mytemplate')

@section('title', 'Detail page')


<body id="offerBody">
@section('content')

@if($message = Session::get('success'))
<p style="color:green">{{$message}}</p>
@endif

<a href="{{ url('new-offer')}}">ADD AN OFFER</a>


@foreach ($offers as $offer)
        <p><strong>Title : </strong> {{ $offer->title}}</p>
        <a href="{{ route('details.offer', [$offer->id])}}">Details</a>
        <a href="{{ route('update.offer', [$offer->id])}}">Edit</a>
        <a href="{{ route('delete.offer', [$offer->id])}}">Delete</a>
        <hr>
    @endforeach

@endsection