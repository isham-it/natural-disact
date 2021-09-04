@extends('layouts.mytemplate')

@section('title', 'Contact')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">



<body id="contactBody">
@section('content')



   <div id="contact_card" class="card" style="width: 50rem;">
    <img id="contact_img" class="card-img-top" src="img/disact.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="Contact">CONTACT US</h5>
        <p class="card-text">If you need any help, don't hesitate to contact us.</p>

    </div>
  </div>



@endsection
