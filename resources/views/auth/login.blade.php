@extends('layouts.mytemplate')

@section('title', 'Login page')


@section('css')
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

<body id="homeBody">
@section('content')
<div id="login_id">
<div>




<div class="section_our_solution">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="our_solution_category">
        <div class="solution_cards_box">
          <div class="solution_card">
            <div class="hover_color_bubble"></div>



            <div class="solu_description">

<div id="login_title">
            <br><br>
            <h3 id="login_h3">
              Log In
</h3>
            </div>

              <form method="POST" action="{{ route('login') }}">
            @csrf


            <div>
            <x-label for="email" :value="__('EMAIL')" class="titleForm"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your username"/>
            </div>

            
            <div class="mt-4">
                <x-label for="password" :value="__('PASSWORD')" class="titleForm" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />
            </div>


            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button  class="read_more_btn ml-3" >
                    <span id="login_button">{{ __('Log in') }}</span>
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
