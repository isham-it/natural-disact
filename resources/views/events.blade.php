@extends('layouts.mytemplate')

@section('title', 'Event page')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

@endsection

<body id="eventBody">
@section('content')



@foreach ($events as $event)




<div class="row text-center">
    <div class="col-sm-4">
        <div class="thumbnail">
            <p><img id="event_img" src="{{ $event->poster }}" width="350px"></p>
            <p><strong>{{$event->title}}</strong></p>
            <p><strong>{{$event->date}}</strong></p>
            <p><strong>{{$event->description}}</strong></p>



            <!-- Used to open the Modal -->
            <button class="btn" data-toggle="modal" data-target="#myModal">Description</button>
        </div>
    </div>
</div>

@endforeach

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock">{{$event->description}}</span></h4>
            </div>
            <div class="modal-body">
            </div>

        </div>
    </div>
</div>











@endsection

