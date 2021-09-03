@extends('layouts.mytemplate')

@section('title', 'Detail page')



@section('content')

<p><strong>Date : </strong> {{$ask->date}}</p>
<p><strong>Title : </strong> {{$ask->title}}</p>
<p><strong>Description : </strong> {{$ask->description}}</p>
<p><strong>City : </strong> {{$ask->city}}</p>
<p><strong>Capacity : </strong>{{$ask->capacity}}</p>



    <hr>

@endsection
