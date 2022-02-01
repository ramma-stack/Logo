@extends('layouts.app')
@section('content')


<section class="container m-auto">
    <header class=" m-auto max-h-full">
        <section class="md:flex justify-between mx-5">
            <div class="mt-10 flex justify-center items-center">
                <div class="flex-col justify-center">
                    <h1 class="text-2xl sm:text-4xl xl:text-5xl mb-3 font-Merr font-medium">
                        Some Catchy Title Here
                    </h1>
                    <p class=" uppercase pl-1 mb-3 text-md font-medium">
                        Lorem ipsum dolor sit amet consectetur adipisicing
                    </p>
                    <p class=" uppercase pl-1 mb-6 text-md font-medium">
                        Lorem, ipsum dolor.
                    </p>
                    <a href="/shop" class="
                p-3.5
                px-6
                text-white
                uppercase
                font-medium font-Merr
                bg-gradient-to-r
                from-red-500
                to-pink-500
                hover:opacity-80
                rounded-full
                transition
                duration-200
                hover:bg-purple-600
              ">
                        Shop Now
                    </a>
                </div>
            </div>
            <div class="">
                <img class="md:mt-20 mt-10 transform scale-75 md:scale-100" src="image/hero-img.svg" alt="" />
            </div>
        </section>
    </header>
    <main>
        <section class="flex justify-between mb-5 mx-5 mt-28">
            <h1 class="text-gray-800 font-semibold font-Merr text-xl">Men's Collections</h1>
            <a href="/mensCollection" class="flex items-center text-gray-800 font-sembold font-Merr text-md transition duration-200 hover:text-purple-600">
                Viwe All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </section>
        <section class=" grid grid-cols-8 mx-5 mt-5 gap-10">
            @foreach ($MensProducts as $MP)
            <div class="bg-white col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-300 rounded-lg overflow-hidden">
                <div class="overflow-hidden">
                    <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/men/{{ $MP->image }}" alt="">
                </div>
                <div class="m-5">
                    <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">{{ $MP->title }}</h3>
                    <div class="flex mb-3 justify-start">
                        @foreach ($MP->color as $colors)
                        <div class="shadow-lg shadow-gray-300 w-6 h-6 mr-2 rounded-full bg-{{ $colors }}-900"></div>
                        @endforeach
                    </div>
                    <div class="flex mb-3">
                        @foreach ($MP->size as $sizes)
                        <div class="border text-gray-500 border-dark-50 rounded-md p-2 px-1.5 mx-1">{{ $sizes }}</div>
                        @endforeach
                    </div>
                    <div class="flex justify-between my-4">
                        <a href="/mensCollection/{{ $MP->id }}" class="btn w-full text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            Viwe Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <section class="flex justify-between mb-5 mx-5 mt-28">
            <h1 class="text-gray-800 font-semibold font-Merr text-xl">Women's Collections</h1>
            <a href="/humansCollection" class="flex items-center text-gray-800 font-semibold font-Merr text-md transition duration-200 hover:text-purple-600">
                Viwe All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </section>
        <section class=" grid grid-cols-8 mx-5 mt-5 gap-10">
            @foreach ($WomenProducts as $WP)
            <div class="bg-white col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-300 rounded-lg overflow-hidden">
                <div class="overflow-hidden">
                    <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/women/{{ $WP->image }}" alt="">
                </div>
                <div class="m-5">
                    <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">{{ $WP->title }}</h3>
                    <div class="flex mb-3 justify-start">
                        @foreach ($WP->color as $colors)
                        <div class="shadow-lg shadow-gray-300 w-6 h-6 mr-2 rounded-full bg-{{ $colors }}-900"></div>
                        @endforeach
                    </div>
                    <div class="flex mb-3">
                        @foreach ($WP->size as $sizes)
                        <div class="border text-gray-500 border-dark-50 rounded-md p-2 px-1.5 mx-1">{{ $sizes }}</div>
                        @endforeach
                    </div>
                    <div class="flex justify-between my-4">
                        <a href="/mensCollection/{{ $MP->id }}" class="btn w-full text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            Viwe Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <section class="mx-5">
            <div class="flex rounded-md overflow-hidden flex-row my-20 shadow-lg shadow-gray-300">
                <div class="lg:w-3/5 bg-gradient-to-r from-black via-purple-900 to-transparent">
                    <form method="post" action="/subscribe" class="lg:w-1/2 text-pink-50 m-10">
                        @csrf
                        <h1 class=" text-3xl mb-4 font-Merr font-bold">Subscribe to get our offers first</h1>
                        <p class="text-base mb-4 font-normal ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis fugit est placeat praesentium quas aspernatur architecto quae quisquam perferendis dolorem!</p>
                        <input name="email" class="w-full mb-4 font-Merr outline-none bg-gray-600 p-3 rounded-lg" type="email" placeholder="Enter email address" required>
                        <button class="w-full font-Merr text-lg p-3 bg-red-600 rounded-lg transition duration-200 hover:opacity-80">Subscribe</button>
                        <p class="text-base text-center my-3 font-normal ">{{ session('seccess') }}</p>
                        <p class="text-base text-center my-3 font-normal ">{{ session('sended') }}</p>
                        @if ($errors->has('email'))
                        <p class="text-base text-center my-3 font-normal ">{{ $errors->first('email') }}</p>
                        @endif
                    </form>
                </div>
                <div class="hidden lg:inline-block w-2/5">
                    <img class="h-96" src="image/subscribe-banner.png" alt="">
                </div>
            </div>
        </section>
    </main>

</section>

@endsection