@extends('layouts.mytemplate')

@section('title', 'Accord page')


<body id="successBody">
@section('content')

@if($message = Session::get('success'))
<p style="color:green">{{$message}}</p>
@endif


@foreach ($accords as $accord)
        <p><strong>Title : </strong> {{ $accord->title}}</p>
        <a href="{{ route('details.accord', [$accord->id])}}">Details</a>

        <hr>

    @endforeach

@endsection


