@extends('layouts.mytemplate')

@section('title', 'home page')

<link rel="stylesheet" href="{{ URL::asset('public/css/nav.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">

<body id="homeBody">
    @section('content')

<nav>

    <ul>


    <nav id="home_nav">



                <div id="service_card" class="card" style="width: 18rem;">
                    <img id="service_img" class="card-img-top" src="img/hero_3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build</p>
                        <a href="{{ url('offers') }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


            <div id="service_card" class="card" style="width: 18rem;">
                    <img id="service_img" class="card-img-top" src="img/hero_3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build</p>
                        <a href="{{ url('offers') }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


            <div id="service_card" class="card" style="width: 18rem;">
                    <img id="service_img" class="card-img-top" src="img/hero_3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build</p>
                        <a href="{{ url('offers') }}" class="btn btn-primary">Go somewhere</a>
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
