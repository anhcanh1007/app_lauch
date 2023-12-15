@extends('client.layouts.master')

@section('main')
    <div class="flex justify-center items-center bg-slate-300 w-full bg-cover h-screen"
        style="background-image: url({{ asset('images/backlogin2.jpg') }})">
        <div class="w-1/2 bg-[#ffffff] px-16 py-16 rounded-xl">
            <div class="flex justify-center items-center">
                <h1 class="text-5xl tracking-wide font-medium text-[#2f06bb]">Login</h1>
            </div>
            <div class="mt-8">
                <form action="">
                    <div class="mb-3">
                        <p class="text-xl mb-2">Your email or username</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="text" name="" placeholder="email / username">
                    </div>
                    <div class="mb-3">
                        <p class="text-xl mb-2">Your Password</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="text" name="" placeholder="Password">
                    </div>
                    <div class="flex justify-between mb-5">
                        <div>
                            <input type="checkbox" class="text-base rounded-xl mr-2" name="" id=""><span
                                class="text-base font-medium">Remember
                                me?</span>
                        </div>
                        <div>
                            <p class="text-base font-medium underline decoration-dotted hover:text-blue-900 duration-200">
                                Forgot Password?</p>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="bg-[#7e29e7] px-10 py-3 text-xl font-medium rounded-xl tracking-wide text-white hover:bg-[#5d87ff] duration-300">Log
                            In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
