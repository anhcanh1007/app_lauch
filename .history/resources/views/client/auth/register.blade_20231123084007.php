@extends('client.layouts.master')

@section('main')
    <div class="flex justify-center items-center bg-slate-300 w-full bg-cover h-screen"
        style="background-image: url({{ asset('images/backlogin2.jpg') }})">
        <div class="w-1/2 bg-[#ffffff] px-16 py-16 rounded-xl">
            <div class="flex justify-center items-center">
                <h1 class="text-5xl tracking-wide font-medium text-[#2f06bb]">Register</h1>
            </div>
            <div class="mt-8">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <p class="text-xl mb-2">Email Address</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="text" name="email" placeholder="Your Email">
                            @error('email')
                                <div><i class="text-xs text-red-500 tracking-wide">{{ $message }}</i></div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <p class="text-xl mb-2">Username</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="text" name="username" placeholder="Your Username">
                            @error('username')
                                <div><i class="text-xs text-red-500 tracking-wide">{{ $message }}</i></div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <p class="text-xl mb-2">Password</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="password" name="password" placeholder="Your Password">
                            @error('password')
                                <div><i class="text-xs text-red-500 tracking-wide">{{ $message }}</i></div>
                            @enderror
                    </div>
                    <div class="mb-8">
                        <p class="text-xl mb-2">Confirm Password</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="password" name="c_password" placeholder="Confirm Your Password">
                            @error('username')
                                <div><i class="text-xs text-red-500 tracking-wide">{{ $message }}</i></div>
                            @enderror
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-[#7e29e7] px-10 py-3 text-xl font-medium rounded-xl tracking-wide text-white hover:bg-[#5d87ff] duration-300">Sign
                            Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
