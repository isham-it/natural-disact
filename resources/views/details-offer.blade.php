@extends('layouts.mytemplate')

@section('title', 'Detail page')



@section('content')

    <p><strong>Name : </strong> {{$offer->title}}</p>


    <hr>
    
@endsection