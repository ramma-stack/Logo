@extends('layouts.app')

@section('content')

@if (session('mail'))
<div class="w-full capitalize text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ session('mail') }}</span>
    </div>
</div>
@endif

<div class="bg-gray-50 flex justify-center">
    <div class="py-12">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg md:max-w-xl mx-2">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">
                    <div class="flex flex-row">
                        <h2 class="text-3xl capitalize font-semibold">{{ Breadcrumbs::render('profile') }}</h2>
                    </div>
                    <div class="flex flex-row pt-2 text-xs pt-6 pb-5">
                        <span class="font-bold">Information</span>
                    </div> <span>Customer Information</span>
                    <form action="/updatePro" method="post">
                        @csrf
                        <div class="relative pb-5">
                            <input type="text" value="{{ $info->email }}" name="email" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="E-mail">
                        </div> <span>Shipping Address</span>
                        <div class="grid md:grid-cols-2 md:gap-2">
                            <input type="text" value="{{ $info->name }}" name="name" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="First name*">
                            <input type="text" value="" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Last name*">
                        </div> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Company (optional)">
                        <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Address*">
                        <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Apartment, suite, etc. (optional)">
                        <div class="grid md:grid-cols-3 md:gap-2">
                            <input type="text" value="" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Zipcode*">
                            <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="City*">
                            <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="State*">
                        </div>
                        <input type="text" value="" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Country*">
                        <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Phone Number*">
                        <div class="flex justify-between items-center pt-2">
                            <a href="/" type="button" class="pl-1 text-blue-500 text-xs font-medium">Return to Home</a>
                            <button class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Continue to Upadte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection