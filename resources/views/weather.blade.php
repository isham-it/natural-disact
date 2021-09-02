@extends('layouts.mytemplate')

@section('title', 'Weather in Luxembourg')

@section('content')

<div class="apiMeteo">
    <h3>Weather in Luxembourg</h3><br>
    
    <p>Description: {{$weatherDescription[0]['description']}}</p>
    <p>Température: {{$weatherArray['main']['temp']}}°C</p>
    <p>Pressure: {{$weatherArray['main']['pressure']}}</p>
    <p>Humidity: {{$weatherArray['main']['humidity']}}</p>
    <p>Wind Speed: {{$weatherArray['wind']['speed']}} Km/H</p>    
</div>

  


@endsection
