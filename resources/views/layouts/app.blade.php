<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class=" bg-gray-50 h-screen antialiased leading-none font-sans" style="font-family: 'Nunito', sans-serif;">
    <section id="app">
        <header class=" py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="flex mb-5 xl:mb-0 xl:justify-start justify-center items-center">
                    <div class=" bg-gradient-to-r from-purple-400 to-red-400 rounded-md w-10 h-10 mr-2
            "></div>
                    <a class="text-gray-800 font-Merr font-medium text-3xl" href="/">Logo</a>
                </div>
                <nav class="w-5/12 text-gray-300 text-sm sm:text-base">
                    <ul class=" flex justify-evenly items-center text-gray-700 font-Merr font-normal text-lg">
                        <li>
                            <a class="flex justify-center  mb-1 underline-purple-700 mx-2.5 transition duration-200 hover:underline hover:text-purple-600
              " href="/">Home</a>
                        </li>
                        <li>
                            <a class="
                    flex
                    justify-center 
                    mb-1
                underline-purple-700
                mx-2.5
                transition
                duration-200
                hover:underline
                hover:text-purple-600
              " href="/shop">Shop</a>
                        </li>
                        <li>
                            <a class="
                    flex
                    justify-center 
                    mb-1
                underline-purple-700
                mx-2.5
                transition
                duration-200
                hover:underline
                hover:text-purple-600
              " href="/contact">Contact</a>
                        </li>

                        <li class="relative inline-block mr-3">
                            <a href="/cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $hasCart }}</span>
                            </a>
                        </li>

                        @guest
                        <a class="btn1 no-underline " href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="btn2 no-underline " href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <div class="flex justify-center">
                            <div>
                                <div id="user_logout" class="dropdown relative">
                                    <button class=" dropdown-toggle px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap " href="#">
                                        <span>{{ Auth::user()->name }}</span>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                                        </svg>
                                    </button>
                                    <ul id="logout" class="w-full mt-1 overflow-hidden text-center dropdown-menu absolute bg-white z-40 rounded-lg shadow-lg hidden " aria-labelledby="dropdownMenuButton2">
                                        <li class="border-t  border-gray-100 px-6 py-2 duration-300 hover:bg-gray-100">
                                            <a class="" href="/profile">Account</a>
                                        </li>
                                        <li class="px-7 py-2 duration-300 hover:bg-gray-100">
                                            <a href="{{ route('logout') }}" class="no-underline" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')
        <footer class="w-full flex justify-center">
            <div class="container flex flex-col justify-center">
                <hr class="mt-8">
                <div class="sm:flex flex-row justify-center font-Merr text-gray-500 justify-between mb-10">
                    <div class="flex flex-wrap justify-center m-5">
                        <a class="mr-2 sm:mr-5 transition duration-200 hover:text-purple-400" href="">About</a>
                        <a class="mr-2 sm:mr-5 transition duration-200 hover:text-purple-400" href="">Privacy Policy</a>
                        <a class="mr-2 sm:mr-5 transition duration-200 hover:text-purple-400" href="">Terms of Services</a>
                    </div>
                    <p class="mt-5 flex justify-center">@CopyRight 2021</p>
                </div>
            </div>
        </footer>
    </section>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>