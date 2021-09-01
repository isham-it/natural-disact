@extends('layouts.mytemplate')

@section('title', 'Detail page')
@section('css')
    <link rel="stylesheet" href="ask.css">
@endsection



@section('content')

    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif

    <a id="button" href="{{ url('new-offer') }}">ADD AN OFFER</a>


    @foreach ($offers as $offer)
        <div id="card">
            <p id="title"><strong>Title : </strong> {{ $offer->title }}</p>
            <a id="link" href="{{ route('details.offer', [$offer->id]) }}">Details</a>
            <a href="{{ route('update.offer', [$offer->id]) }}">Edit</a>
            <a href="{{ route('delete.offer', [$offer->id]) }}">Delete</a>

        </div>
    @endforeach

@endsection
