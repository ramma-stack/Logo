@extends('layouts.app')
@section('content')

<div class="w-full flex justify-center items-center">
    <div class="container rounded-md relative flex justify-start items-center h-72 overflow-hidden">
        <img class=" object-cover brightness-75" src="image/MensCollection.jpeg" alt="">
        <div class="pl-32 py-10 absolute flex flex-col justify-start items-start text-xl text-shadow-md capitalize">
            <p class="py-5 text-4xl text-white">Men Collections</p>
            {{ Breadcrumbs::render('MensCollection') }}
        </div>
    </div>
</div>

<div class="w-full mt-5 flex justify-center">
    <p class="container text-2xl font-semibold text-gray-600">Products - Enjoy!</p>
</div>

<section class="w-full flex justify-center">
    <div class="container grid grid-cols-5 p-6 gap-5">
        @foreach ($MensCollect as $MP)
        <div class="container col-span-4 sm:col-span-2 xl:col-span-1 shadow-lg shadow-gray-300 rounded-lg overflow-hidden">
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
                <div class="flex flex-col justify-between my-4">
                    <a href="/mensCollection/{{ $MP->id }}" class="btn text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                        Viwe Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<div class="w-full flex justify-center">
    {{ $MensCollect->links('../partials/my_pagination') }}
</div>

@endsection