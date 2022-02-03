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

            <nav class="bg-white border-gray-200 mx-5 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="/" class="flex">
                        <div class=" bg-gradient-to-r from-purple-400 to-red-400 rounded-md w-10 h-10 mr-2"></div>
                        <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">Logo</span>
                    </a>
                    <div class="flex items-center md:hidden">
                        <div class="relative mr-4">
                            <a class="py-1" href="/cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-1.5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="absolute top-0 right-0  inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $hasCart }}</span>
                            </a>
                        </div>
                        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col md:items-center mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-lg md:font-medium">
                            <li>
                                <a href="/" class="block py-4 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                            </li>
                            <li>
                                <a href="/shop" class="block py-4 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                            </li>
                            <li>
                                <a href="/contact" class="block py-4 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                            <li class="relative hidden md:block">
                                <a class="py-1" href="/cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-1.5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span class="absolute top-0 right-0  inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $hasCart }}</span>
                                </a>
                            </li>
                            <li class="p-2 flex">
                                @guest
                                <a class="btn1 no-underline mr-2 " href="{{ route('login') }}">{{ __('Login') }}</a>
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
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

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