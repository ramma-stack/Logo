@extends('layouts.app')
@section('content')

<div class="w-full flex justify-center items-center">
    <div class="container rounded-md relative flex justify-start items-center h-72 overflow-hidden">
        <img class="object-cover brightness-75" src="../image/details.jpg" alt="">
        <div class="pl-32 py-10 absolute flex flex-col justify-start items-start text-xl text-shadow-md capitalize">
            <p class="py-5 text-4xl text-white">Details</p>
            @php
            $page = "";
            $pageimage = "";
            if ($direct == "MensCollection"){
                echo Breadcrumbs::render('details', $mensDetails->id, $direct);
                $page = $mensDetails;
                $pageimage = "men";
            }
            else{
                echo Breadcrumbs::render('details', $humansDetails->id, $direct);
                $page = $humansDetails;
                $pageimage = "women";
            }
            @endphp
        </div>
    </div>
</div>

<div class="w-full mt-5 flex justify-center">
    <p class="container text-2xl font-semibold text-gray-600">Products - Enjoy!</p>
</div>

<section class="text-gray-700 body-font overflow-hidden bg-gary-100">
    <div class="container px-5 py-5 mx-auto">
        <form method="post" action="/order/{{ $page->id }}" class="lg:w-4/5 mx-auto flex flex-wrap">
            @csrf
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="../image/products/{{ $pageimage }}/{{ $page->image }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $page->title }}</h1>
                <div class="flex mb-4">
                    <span class="flex items-center">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <span class="text-gray-600 ml-3">4 Reviews</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                        </a>
                    </span>
                </div>
                <p class="leading-relaxed">{{ $page->details }}</p>
                <div class="flex flex-col mt-6 pb-5 border-b-2 border-gray-200 mb-5">
                    <div id="colors" class="flex mb-5 justify-start items-center">
                        @foreach ($page->color as $colors)
                        <input type="checkbox" name="colors[]" value="{{ $colors }}" class="form-checkbox mr-2 w-5 h-5 rounded-xl border focus:ring-2 focus:ring-blue-500 border-gray-400" required>
                        <div class="ring-2 ring-gray-200 mr-4 w-6 h-6 mr-2.5 rounded-full bg-{{ $colors }}-900"></div>
                        @endforeach
                    </div>

                    <div id="sizes" class="flex items-center mb-3">
                        @foreach ($page->size as $sizes)
                        <input type="checkbox" name="sizes[]" value="{{ $sizes }}" class="form-checkbox mr-1 w-5 h-5 rounded-md border focus:ring-2 focus:ring-blue-500 border-gray-400" required>
                        <div class="bg-white border mr-3 text-gray-500 border-dark-50 rounded-md p-2 px-2 mx-1">{{ $sizes }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">{{ $page->price.'IQD' }}</span>
                    <!-- component -->
                    <div class="custom-number-input h-10 flex items-center ml-auto w-32">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent">
                            <div id="decrement" class="cursor-pointer flex items-center justify-center bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </div>
                            <!-- <input name="quantity" type="number" class="form-input w-14 text-center bg-gray-300 focus:outline-bg-red-500 border-none focus:border focus:border-bg-gray-600" value="1"></input> -->
                            <input type="number" name="quantity" id="password" value="1" class="text-center bg-gray-300 border border-gray-300 text-gray-900 text-base focus:ring-gray-300 focus:border-none block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <!-- <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input> -->
                            <div id="increment" class="cursor-pointer flex items-center justify-center bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </div>
                        </div>

                        <style>
                            input[type='number']::-webkit-inner-spin-button,
                            input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }
                        </style>

                    </div>
                    <button id="checkBtn" class="flex items-center text-white bg-red-500 border-0 py-2 px-6 ml-4 focus:outline-none hover:bg-red-600 rounded">Add Cart</button>
                    <div class="rounded-full cursor-pointer w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </div>
                </div>
        </form>
    </div>
</section>



@endsection