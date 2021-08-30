@extends('layouts.mytemplate')

@section('title', 'Add a help offer')
@section('css')
    <link rel="stylesheet" href="offer.css">
@endsection
@section('content')

    <h3>Add a new offer</h3>



    <div id="results"></div>
    <form id="myForm" action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf

        <label for="">Title</label>
        <input type="text" name="title" placeholder="Title"><br>



        <input type="submit" value="Publish">
    </form>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('myForm').submit(function(e) {
                e.preventDefault();
                // Ajax call
                $.ajax({
                        url: "{{ route('submit.ajax.form') }}",
                        method: 'post',
                        data: $("form").serialize(),
                    })
                    .done(function(result) {
                        // If AJAX call worked
                        console.log('ACCESS');
                    })
                    .fail(function(result) {
                        // Fail means : file not found, 500 errors.
                        // Fail doesnt mean : problem with query, syntax error in php
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
@endsection




