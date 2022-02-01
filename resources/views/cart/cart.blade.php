@extends('layouts.app')

@section('content')

<div class="w-full flex justify-center items-center">
    <div class="container object-top rounded-md relative flex justify-start items-center h-72 overflow-hidden">
        <img class=" object-cover brightness-75" style="object-position: 0 100px;" src="../image/cart.jpg" alt="">
        <div class="pl-32 py-10 absolute flex flex-col justify-start items-start text-xl text-shadow-md capitalize">
            <p class="py-5 text-4xl text-white">Cart Order</p>
            {{ Breadcrumbs::render('cartOrder') }}
        </div>
    </div>
</div>

<div class="w-full mt-5 flex justify-center">
    <p class="container text-2xl font-semibold text-gray-600">Products - Enjoy!</p>
</div>

@if (session('deleteItem'))
<div class="w-full capitalize text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">Your Cart To change of The {{ session('deleteItem') }}</span>
    </div>
</div>
@endif

<section class="p-10">
    <div class="container mx-auto">
        <form method="post" action="/postApply" class="flex shadow-xl">
            @csrf
            <div class="w-3/4 bg-white px-10 py-5">
                <div class="flex justify-between border-b pt-5 pb-8">
                    <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                    <h2 class="font-semibold text-2xl">{{ $hasCart }} Items</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>

                @foreach ($MensAndCart as $mc)
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5">
                        <!-- product -->
                        <div class="w-20">
                            <img class="h-24" src="image/products/men/{{ $mc->image }}" alt="">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class=" font-bold text-sm">{{ $mc->title }}</span>
                            <div class="flex">
                                @foreach ($mc->color as $colors)
                                <div class=" ring-2 ring-gray-200 mr-4 w-3 h-3 mr-2.5 rounded-full bg-{{ $colors }}-900"></div>
                                @endforeach
                            </div>
                            <div class="flex">
                                @foreach ($mc->size as $sizes)
                                <div class=" text-xs border mr-3 text-gray-500 border-dark-50 rounded-md px-1">{{ $sizes }}</div>
                                @endforeach
                            </div>
                            @if ($mc->checkout == 0)
                            <a href="/remove/{{ $mc->id }}/{{ $mc->guestid }}" class="font-semibold text-left hover:text-red-500 text-gray-500 text-xs">Remove</a>
                            @else
                            <a data-tooltip-target="tooltip-right" data-tooltip-placement="right" class="font-semibold w-14 cursor-not-allowed hover:text-red-500 text-gray-500 text-xs">Remove</a>
                            <div id="tooltip-right" role="tooltip" class="inline-block capitalize absolute left-0 z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                this itme from checkout!
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            @endif

                        </div>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-xl">{{ $mc->quantity }}</span>
                    <span class="text-center w-1/5 font-semibold text-sm">{{ $mc->price }}IQD</span>
                    <span class="text-center w-1/5 font-semibold text-sm">{{ $mc->quantity*$mc->price }}IQD</span>
                </div>
                @endforeach

                <a href="/shop" class="flex font-semibold text-indigo-600 text-sm mt-10">

                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                        <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continue Shopping
                </a>
            </div>

            <div id="summary" class="bg-gray-100 w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase">Items {{ $hasCart }}</span>
                    <span class="font-semibold text-sm">
                        @php
                        $total = 0;
                        foreach ($MensAndCart as $mc)
                        $total = $total + $mc->quantity*$mc->price;
                        echo $total."IQD";
                        @endphp
                    </span>
                </div>
                <div>
                    <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                    <select class="block p-2 text-gray-600 w-full text-sm">
                        <option>Standard Delivery - 15000IQD</option>
                    </select>
                </div>
                <div class="py-10">
                    <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                    <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full outline-none">
                </div>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span class="font-bold">Total cost</span>
                        <span class="font-bold">
                            @php
                            $total = 0;
                            foreach ($MensAndCart as $mc)
                            $total = $total + $mc->quantity*$mc->price;
                            echo $total."IQD";
                            @endphp
                        </span>
                    </div>
                    @php
                    $check = 0;
                    $items = 0;
                    $items++;
                    if ($mc->checkout == 1)
                    $check++;
                    if ($check == $items){
                    echo '<button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full" disabled>Checkout</button>';
                    }else{
                    echo '<button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>';
                    }
                    @endphp
                </div>
            </div>

        </form>
    </div>
</section>


@endsection