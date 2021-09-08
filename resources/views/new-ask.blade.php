@extends('layouts.mytemplate')

@section('title', 'Add an ask')
@section('css')
<link rel="stylesheet" href="offer.css">
@endsection

<body id="homeBody">
    @section('content')



    <div id="new_offer_id">
        <div>
            <div id="results"></div>




            <div class="section_our_solution">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>



                                    <div class="solu_description">

                                        <div id="new_offer_title">
                                            <br><br>
                                            <h3 id="new_offer_h3">
                                                Add a new help request
                                            </h3>
                                        </div>

                                        <form id="myForm" method="POST" action="">
                                            @csrf


                                            <div>
                                                <x-label for="title" :value="__('TITLE')" class="titleForm" />

                                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus placeholder="Enter your title" />
                                            </div>

                                            <div>
                                                <x-label for="description" :value="__('DESCRIPTION')" class="titleForm" />

                                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus placeholder="Enter your description" />
                                            </div>

                                            <div>
                                                <x-label for="city" :value="__('CITY')" class="titleForm" />

                                                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus placeholder="Enter your city" />
                                            </div>


                                            <div>
                                                <x-label for="capacity" :value="__('CAPACITY')" class="titleForm" />

                                                <x-input id="capacity" class="block mt-1 w-full" type="number" name="capacity" :value="old('capacity')" required autofocus placeholder="Enter your capacity" />
                                            </div>

                                            <div>
                                                <x-label for="date" :value="__('DATE')" class="titleForm" />

                                                <x-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus placeholder="Enter your date" />
                                            </div>


                                            <x-button class="read_more_btn ml-3" type="submit">
                                                <span id="login_button">{{ __('Publish') }}</span>

                                            </x-button>


                                    </div>
                                    </form>



                                </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>


    @endsection

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
                        //$('#results').html('Add with Success!!');
                        console.log('SUCCESS');
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
