@extends('layouts.mytemplate')


@section('title', 'Weather in Luxembourg')

@section('content')

<body id="weatherBody">

<div class="bodyMeteo">
    <div id="weatherdiv">

        <h3>Weather in Luxembourg</h3><br>

    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-sm-12 col-xs-12">
            <div class="card p-4">
                <div class="d-flex">
                <style type="text/css">
                h6{
                color: #505149;
                }
                </style>
                    <h6 class="flex-grow-1">Luxembourg</h6>
                    <h6 id="datetime"></h6>
                </div>
                <div class="d-flex flex-column temp mt-5 mb-3">
                    <h1 class="mb-0 font-weight-bold" id="heading"><p>{{$weatherArray['main']['temp']}}°C</p></h1> <span class="small grey"><p>{{$weatherDescription[0]['description']}}</p></span>
                </div>
                <div class="d-flex">
                    <div class="temp-details flex-grow-1">
                        <p class="my-1"> <img src="img/B9kqOzp.png" height="17px"> <span>{{$weatherArray['wind']['speed']}} Km/H</span> </p>
                        <p class="my-1"> <i class="fa fa-tint mr-2" aria-hidden="true"></i> <span>{{$weatherArray['main']['humidity']}}%</span> </p>
                        <p class="my-1"> <img src="{{URL::asset('img/pressure.png')}}" height="17px"> <span> {{$weatherArray['main']['pressure']}} </span> </p>
                    </div>
                    <div> <img src="{{URL::asset('img/weather.gif')}}" width="100px"> </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>var dt = new Date();document.getElementById("datetime").innerHTML = dt.toLocaleString();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
