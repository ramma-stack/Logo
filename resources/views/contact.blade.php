@extends('layouts.app')
@section('content')


<main class="mx-10 sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    @if(session('success'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
      <span class="font-medium capitalize">{{ session('success') }}</span>
    </div>
    @endif
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <form class="w-full px-2 sm:px-7 sm:space-y-8" method="POST" action="/contact">
                    @csrf
                    <div class="capitalize {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="email" class="block text-gray-600 text-sm font-bold mb-2.5">Email address</label>
                        <input id="email" type="email" placeholder="Enter email" class="form-control mb-2 duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border @error('email') border-red-300 @enderror border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        <span class="text-red-500">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="capitalize {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="block text-gray-600 text-sm font-bold mb-2.5">Name</label>
                        <input name="name" type="text" class="form-control mb-2 duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border border-solid border-gray-300 rounded m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " id="name" aria-describedby="name" placeholder="Your name">
                        <span class="text-red-500">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="capitalize {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="exampleInputPassword1" class="block text-gray-600 text-sm font-bold mb-2.5">Comment</label>
                        <textarea name="comment" class="form-control mb-2 duration-300 block w-full px-3 py-1.5 text-base font-normal text-gray-700 border border-solid border-gray-300 rounded m-0 focus:text-gray-700 focus:ring-2 focus:ring-blue-600 outline-none " id="exampleFormControlTextarea1" rows="3"></textarea>
                        <span class="text-red-500">{{ $errors->first('comment') }}</span>
                    </div>
                    <button class="btn2 text-xl" style=" margin-bottom: 30px;">Submit</button>
                </form>

            </section>
        </div>
    </div>
</main>

@endsection