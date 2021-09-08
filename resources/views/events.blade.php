@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

@endsection

<body id="eventBody">
@section('content')


<h1 id="event_h1" class="fw-light text-center text-lg-start mt-4 mb-0">Event announcements </h1>
<br><br>
<div class="container1">
@foreach ($events as $event)
<div id="event_id">
        <div>

<div class="section_our_solution">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="our_solution_category">
        <div class="solution_cards_box">
          <div class="solution_card">
            <div class="hover_color_bubble"></div>






            <div class="solu_title">
                <div class="solu_description">
                <h3><p>{{$event->title}}</p></h3>
                <p><strong>{{$event->date}}</strong></p>
                <p id="event_description">
                    {{$event->description}} It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                </p>
            </div>


            </div>
            <div>
            <img src="img/event.jpg" width="500px" height="500px" alt="">
</div>





          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        </div></div>


@endforeach

@endsection
