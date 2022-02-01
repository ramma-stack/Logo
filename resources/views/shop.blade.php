@extends('layouts.app')
@section('content')

<div class="w-full flex justify-center items-center">
    <div class="container rounded-md relative flex justify-start items-center h-72 overflow-hidden">
        <img class=" object-cover brightness-75" src="image/collections.jpg" alt="">
        <div class="pl-32 py-10 absolute flex flex-col justify-start items-start text-xl text-shadow-md capitalize">
            <p class="py-5 text-4xl text-white">Shop</p>
            {{ Breadcrumbs::render('shop') }}
        </div>
    </div>
</div>

<div class="w-full mt-5 flex justify-center">
    <p class="container text-2xl font-semibold text-gray-600">Collections</p>
</div>

<section class="w-full flex justify-center">
    <div class="container flex justify-evenly p-6">
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="/mensCollection">
                <img class="rounded-t-lg" src="image/men.jpg" alt="">
                <div class="p-5">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Men Collections</h5>
                </div>
            </a>
        </div>
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="/humansCollection">
                <img class="rounded-t-lg" src="image/women.jpg" alt="">
                <div class="p-5">
                        <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Women Collections</h5>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection