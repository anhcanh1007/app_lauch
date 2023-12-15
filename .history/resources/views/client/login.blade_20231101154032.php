@extends('client.layouts.master')

@section('main')
    <div class="flex justify-center items-center bg-slate-300 w-full bg-cover h-screen"
        style="background-image: url({{ asset('images/backlogin2.jpg') }})">
        <div class="w-1/2 bg-[#ffffff] px-8 py-4 rounded-xl">
            <div class="flex justify-center items-center">
                <h1 class="text-2xl tracking-wide font-medium text-[#2f06bb]">Login</butt>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="mb-3">
                        <p class="text-xl mb-2">Your email or username</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="text" name="" placeholder="email / username">
                    </div>
                    <div class="mb-3 flex ju">
                        <p class="text-xl mb-2">Your Password</p>
                        <input class="border border-gray-800 w-full rounded-xl text-base px-5 py-2 hover:border-blue-900"
                            type="text" name="" placeholder="Password">
                    </div>
                    <div>
                        <div>
                            <input type="checkbox" name="" id=""><span>Remember me?</span>
                        </div>
                        <div>
                            <p>Forgot Password?</p>
                        </div>
                    </div>
                    <div>
                        <button>Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
