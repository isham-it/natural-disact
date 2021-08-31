@extends('layouts.mytemplate')

@section('title', 'Detail page')



@section('content')

    <p ><strong>Name : </strong> {{$ask->title}}</p>


    <hr>

@endsection
