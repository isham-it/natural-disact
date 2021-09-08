@extends('layouts.mytemplate')

@section('title', 'contact-us')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">



<body id="contactBody">
    @section('content')

    <div>
    @if (session('success'))
    <style type="text/css">
        .alert-success {
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            border-radius: 10px;
        }
    </style>
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </div>



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- image lux -->
<div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="img/Floods-in-Echternach.jpg" alt="Echternach" width="1200" height="700">
        <div class="carousel-caption">
            <h2>LUXEMBOURG 2021</h2>
        <p>Thank you, A night we won't forget.</p>
    </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We can help you!</em></p>

  <div class="row">
      <div class="col-md-4">
          <p>Dis'act</p>
      <p>LUXEMBOURG</p>
      <p>Phone: +352 666 666 666</p>
      <p>Email: disact.project.gmail.com</p>
    </div>


    <div class="col-md-8">
        <div class="row">
            <form method="POST" action="{{route ('contact.submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 form-group">
                    <input class="form-control"  name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control"  name="email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-6 form-group">
            <input class="form-control"  name="phone" placeholder="Phone" type="text" required>
        </div>
    </div>
    <textarea class="form-control"  name="msg" placeholder="Message" rows="5"></textarea>
    <br>
    <div class="row">
        <div class="col-md-12 form-group">
            <button class="btn btn-primary float-left" type="submit" value="submit">Send</button>
        </form>
    </div>
</div>

</div>
</div>

@endsection






