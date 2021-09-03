@extends('layouts.mytemplate')

@section('title', 'Contact')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">



<body id="contactBody">
@section('content')



   <div id="contact_card" class="card" style="width: 18rem;">
    <img id="contact_img" class="card-img-top" src="img/hero_3.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="Contact">CONTACT US</h5>
        <p class="card-text">contact us </p>
        <a href="{{ url('offers') }}" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>


@endsection
