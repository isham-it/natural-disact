@extends('layouts.mytemplate')

@section('title', 'Home Page')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

<body id="homeBody">
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


        <nav>

            <ul>


                <nav id="home_nav">



                    <div class="service_card" class="card" style="width: 18rem;">
                        <img id="offer_img" class="service_img" class="card-img-top" src="img/offerhelp.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Help offers</h5>
                            <p class="card-text">Natural disasters often call for volunteers with a variety of
                                backgrounds to help physically and emotionally rebuild affected communities. There’s a good
                                chance you have something to offer in volunteering abroad in an area affected by a natural
                                disaster.</p>
                            <a href="{{ url('offers') }}" class="btn btn-primary">View help offers</a>
                        </div>
                    </div>


                    <div class="service_card" class="card" style="width: 18rem;">
                        <img id="ask_img" class="service_img" class="card-img-top" src="img/water.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Help requests</h5>
                            <p class="card-text">No one else does this: not the government, not other charities. From
                                small house fires to multi-state natural disasters, Dis'Act offers help needed, so people
                                can have clean water, safe shelter and hot meals when they need them most.</p>
                            <a href="{{ url('asks') }}" class="btn btn-primary">View help requests</a>
                        </div>
                    </div>


                    <div class="service_card" class="card" style="width: 18rem;">
                        <img id="accord_img" class="service_img" class="card-img-top" src="img/successhelp.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Help successes</h5>
                            <p class="card-text">Thanks to dozens of volunteers from around the world, we’ve already
                                helped more than 7,000 survivors get back on the road to recovery.</p>
                            <a href="{{ url('accords') }}" class="btn btn-primary">View our successes</a>
                        </div>
                    </div>



                </nav>
                <!-- <div id="service_card">
            <img id="service_img" src="img/hero_3.jpg" width="100px" height="100px" alt="">
            <div id="service_link">
                <a href="{{ url('offers') }}">offerrrrrs</a>
            </div>
        </div> -->


            @endsection
