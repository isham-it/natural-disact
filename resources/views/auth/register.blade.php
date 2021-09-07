@extends('layouts.mytemplate')

@section('title', 'Login page')


@section('css')
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

<body id="homeBody">
@section('content')
<div id="register_id">
<div>




<div class="section_our_solution">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="our_solution_category">
        <div class="solution_cards_box">
          <div class="solution_card">
            <div class="hover_color_bubble"></div>



            <div class="solu_description">

<div id="register_title">
            <br><br>
            <h3 id="register_h3">
              Register
</h3>
            </div>

            <form class="formulaire" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- username -->


        <div>
            <x-label for="username" :value="__('USERNAME')" class="titleForm" />

            <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                required autofocus placeholder="Enter your username" />
        </div>
        <!-- first_Name -->
        <div>
            <x-label for="first_name" :value="__('FIRST NAME')" class="titleForm" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                required autofocus placeholder="Enter your first name" />
        </div>
        <!-- Last_Name -->
        <div>
            <x-label for="last_name" :value="__('LAST NAME')" class="titleForm" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required
                autofocus placeholder="Enter your last name" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('EMAIL')" class="titleForm" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                placeholder="Enter your email" />
        </div>

        <!-- City -->
        <!-- <div>
                    <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus
                    placeholder="Enter your city"/>
                </div> -->
        <div>

            <x-label for="city" :value="__('CITY')" class="titleForm" />
            <select class="cityselect" for="city" :value="__('CITY')" class="titleForm" id="city"
                class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus>
                <option selected="selected">Enter your city</option>
                <?php
                    $citys = array('Dippach','Garnich','Habscht','Käerjeng','Kehlen','Koerich','Kopstal','Mamer','Steinfort','Bettembourg','Differdange','Dudelange','Esch-sur-Alzette','Frisange','Kayl','Leudelange','Mondercange','Pétange','Reckange-sur-Mess','Roeser','Rumelange','Sanem','Schifflange','Bertrange','Contern','Hesperange','Luxembourg','Niederanven','Sandweiler','Schuttrange','Steinsel','Strassen','Walferdange','Weiler-la-Tour','Colmar-Berg','Bissen','Helperknapp','Fischbach','Heffingen','Larochette','Lintgen','Lorentzweiler','Mersch','Nommern','Clervaux','Wincrange','Parc Hosingen','Troisvierges','Weiswampach','Bettendorf','Bourscheid','Diekirch','Erpeldange-sur-Sûre','Ettelbruck','Feulen','Mertzig','Reisdorf','Schieren','Vallée de l Ernz','Beckerich','Preizerdaul','Ell','Rambrouch','Grosbous','Redange-sur-Attert','Saeul','Useldange','Vichten','Wahl','Boulaide','Esch-sur-Sûre','Goesdorf','Kiischpelt','Lac de la Haute-Sûre','Wiltz','Winseler','Tandel','Putscheid','Vianden','Beaufort','Bech','Berdorf','Consdorf','Echternach','Rosport-Mompach','Waldbillig','Betzdorf','Biwer','Flaxweiler','Grevenmacher','Junglinster','Manternach','Mertert','Wormeldange','Bous','Dalheim','Lenningen','Mondorf-les-Bains','Remich','Schengen','Stadtbredimus','Waldbredimus');
                    // Parcourir le tableau des langues
                    foreach($citys as $value){
                        ?>
                <option value="<?php echo strtolower($value); ?>"><?php echo $value; ?></option>
                <?php
                        }
                        ?>
            </select>
        </div>

        <!-- Phone -->
        <div>
            <x-label for="phone" :value="__('PHONE')" class="titleForm" />

            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required
                autofocus placeholder="Enter your phone number" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('PASSWORD')" class="titleForm" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Enter your password" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('CONFIRM PASSWORD')" class="titleForm" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required placeholder="Confirm your password" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ml-3">
            <span id="register_button">{{ __('Register') }}</span>
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

