<x-guest-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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

        Email Address
        <div class="mt-4">
            <x-label for="email" :value="__('EMAIL')" class="titleForm" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                placeholder="Enter your email" />
        </div>

        <!-- City -->
        <div>
            <x-label for="city" :value="__('CITY')" class="titleForm" />

            <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus
                placeholder="Enter your city" />
        </div>

        <!-- Phone -->
        <div>
            <x-label for="phone" :value="__('PHONE')" class="titleForm" />

            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required
                autofocus placeholder="Enter your phone number" />
        </div>

        Password
        <div class="mt-4">
            <x-label for="password" :value="__('PASSWORD')" class="titleForm" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Enter your password" required autocomplete="new-password" />
        </div>

        Confirm Password
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('CONFIRM PASSWORD')" class="titleForm" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required placeholder="Confirm your password" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>
        </div>

    </form>



</x-guest-layout>
