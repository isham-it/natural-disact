@extends('layouts.mytemplate')

@section('title', 'about')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">



<body id="aboutBody">
@section('content')



<!-- Page Content -->
<div class="container">

    <h1 class="fw-light text-center text-lg-start mt-4 mb-0">DIS'ACT DEVELOPER TEAM</h1>
    <br>
    <h4>PRESENTATION</h4>
    <br>

  <div class="row text-center text-lg-start">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="img/hicham.jpg" alt="" >
        <p><strong>HICHAM</strong></p>
        <p>Front End/Back End </p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="img/fabio.jpeg" alt=""  >
        <p><strong>FABIO</strong></p>
        <p>Front End/Back End </p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="img/iveta1.jpg" alt="" >
        <p><strong>IVETA</strong></p>
        <p>Front End/Back End </p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="img/alex.jpg" alt="" >
        <p><strong>ALEXANDRE</strong></p>
        <p>Front End/Back End </p>
      </a>
    </div>

  </div>

</div>

@endsection
