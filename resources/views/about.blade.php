@extends('layouts.mytemplate')

@section('title', 'about')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">



<body id="aboutBody">
@section('content')

<div class="container-fluid text-center bg-grey">
    <h1>DIS'ACT DEVELOPER TEAM</h1>
    <h4>PRESENTATION</h4>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail_about">
          <img src="img/girldisaster.jpg" alt="Paris" width="100px">
          <p><strong>ALEXANDRE</strong></p>
          <p>Front End/Back End </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail_about">
          <img src="img/iveta.jpeg" alt="New York">
          <p><strong>IVETA</strong></p>
          <p>Front End/Back End </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail_about">
          <img src="img/fabio.jpeg" alt="San Francisco">
          <p><strong>FABIO</strong></p>
          <p>Front End/Back End </p>
        </div>
    </div>
      <div class="col-sm-4">
        <div class="thumbnail_about">
          <img src="img/hicham.jpg" alt="San Francisco">
          <p><strong>HICHAM</strong></p>
          <p>Front End/Back End </p>
        </div>
    </div>


    </div>
</div>





@endsection
