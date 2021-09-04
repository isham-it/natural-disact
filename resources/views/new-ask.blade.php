@extends('layouts.mytemplate')

@section('title', 'Add an ask')
@section('css')
    <link rel="stylesheet" href="offer.css">
@endsection
@section('content')

    <h3>Add a new ask</h3>



    <div id="results"></div>
    <form id="myForm" action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf

        <label for="">Title</label>
        <input type="text" name="title" placeholder="Title"><br>
        <label for="">Description</label>
        <input type="text" name="description" placeholder="description"><br>
        <label for="">City</label>
        <input type="text" name="city" placeholder="city"><br>
        <label for="">Capacity</label>
        <input type="number" name="capacity" placeholder="capacity"><br>
        <label for="">Date</label>
        <input type="date" name="date" placeholder="date "><br>


        <input type="submit" value="Publish">
    </form>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();

                // Ajax call
                $.ajax({
                        url: "{{ route('submit.ask.form') }}",
                        method: 'post',
                        data: $("form").serialize(),
                        dataType: 'json',
                        success: function(response) {
                            window.location.href = "asks";
                        }
                    })
                    .done(function(result) {
                        $('#results').html('Add with Success!!');
                        console.log('IT WORK BITCH');
                        // Did we get errors or success ?

                    })
                    .fail(function(result) {
                        // Fail means : file not found, 500 errors.
                        // Fail doesnt mean : problem with query, syntax error in php
                        console.log('AJAX FAILED', result);
                    })
            });
        });
    </script>
@endsection
