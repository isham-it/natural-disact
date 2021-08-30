@extends('layouts.mytemplate')

@section('title', 'Update offer')

@section('content')

    <h3>Update offer</h3>

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="title" placeholder="title" value="{{$offer->title}}"><br>

        <input type="submit" value="Update offer">
    </form>


@endsection
