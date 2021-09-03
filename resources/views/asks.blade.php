@extends('layouts.mytemplate')

@section('title', 'Detail page')


@section('css')
    <link rel="stylesheet" href="main.css">
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif



    <a id="button" href="{{ url('new-ask') }}">ADD AN ASK</a>

    @foreach ($asks as $ask)
        <div id="card">
            <p id="title"><strong>Title : </strong> {{ $ask->title }}</p>
            <a id="link" href="{{ route('details.ask', [$ask->id]) }}">Details</a>
            <a href="{{ route('update.ask', [$ask->id]) }}">Edit</a>
            <a href="{{ route('delete.ask', [$ask->id]) }}">Delete</a>

        </div>

    @endforeach

@endsection
