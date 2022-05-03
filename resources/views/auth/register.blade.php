<x-guest-layout>
    <x-auth-card>
        <link rel="stylesheet" href="welcome.css">
        <x-slot name="logo">
    <a href="/" style="color: teal;font-weight: bold;font-size:25px;font-family:cursive;">INCEPTOR ACADEMY</a>
        </x-slot>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

                      {{-- select option role type --}}

                      <div class="mt-4">
                        <x-label for="role_id" value="{{ _('Register as:') }}"/>
                  <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring
                        focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                        <option value="admin">Admin</option>
                        <option value="student">student</option>
                        <option value="staff">Staff</option>

                    </select>
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
    </x-auth-card>
</x-guest-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
</head>
<body>



    <div class="card" style="width: 18rem;">
        <div class="card-body">

        </div>
      </div>
</body>
</html>
