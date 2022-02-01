@extends('layouts.app')

@section('content')
<main class="mx-10 sm:container sm:mx-auto sm:max-w-sm sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-600 text-sm font-bold mb-2.5">
                            {{ __('Name') }}:
                        </label>

                        <input id=" name" type="name" placeholder="Enter name" class="form-control duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border @error('name') border-red-300 @enderror border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-600 text-sm font-bold mb-2.5">
                            {{ __('E-Mail Address') }}
                        </label>
                        <input id="email" type="email" placeholder="Enter email" class="form-control duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border @error('email') border-red-300 @enderror border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-600 text-sm font-bold mb-2.5">
                            {{ __('Password') }}
                        </label>

                        <input id="password" type="password" placeholder="Password" class="form-control duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border border-solid @error('password') border-red-300 @enderror border-gray-300 rounded m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " name="password" value="{{ old('password') }}" name="password" required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-600 text-sm font-bold mb-2.5">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" placeholder="Password Confirm" type="password" class="form-control duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border border-solid border-gray-300 rounded m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " name="password_confirmation" required autocomplete="new-password">
                    </div>
    
                    <div class="flex flex-wrap">
                        <button type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection