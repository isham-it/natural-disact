@extends('layouts.mytemplate')

@section('title', 'Detail page')



@section('content')

@if($message = Session::get('success'))
<p style="color:green">{{$message}}</p>
@endif

<a href="{{ url('new-ask')}}">ADD AN ASK</a>

@foreach ($asks as $ask)
        <p><strong>Title : </strong> {{ $ask->title}}</p>
        <a href="{{ route('details.ask', [$ask->id])}}">Details</a>
        <a href="{{ route('update.ask', [$ask->id])}}">Edit</a>
        <a href="{{ route('delete.ask', [$ask->id])}}">Delete</a>
        <hr>

    @endforeach

@endsection


