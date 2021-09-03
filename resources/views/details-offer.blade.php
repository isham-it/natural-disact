@extends('layouts.mytemplate')

@section('title', 'Detail page')



@section('content')

    <p><strong>Date : </strong> {{$offer->date}}</p>
    <p><strong>Title : </strong> {{$offer->title}}</p>
    <p><strong>Description : </strong> {{$offer->description}}</p>
    <p><strong>City : </strong> {{$offer->city}}</p>
    <p><strong>Capacity : </strong>{{$offer->capacity}}</p>


    @endsection
