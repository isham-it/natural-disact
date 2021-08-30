@extends('layouts.mytemplate')

@section('title', 'Update ask')

@section('content')

    <h3>Update ask</h3>

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="title" placeholder="title" value="{{$ask->title}}"><br>

        <input type="submit" value="Update ask">
    </form>


@endsection
