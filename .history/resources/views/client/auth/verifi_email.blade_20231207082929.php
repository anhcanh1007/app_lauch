@extends('client.layouts.master')
@section('main')
    <div class="w-full h-screen bg-[#a19c9f] flex justify-center items-center">
        <div class="bg-[#f1ffff]">
            <div class="bg-[#0976b1]">
                <h1 class="text-white tracking-wide text-xl font-semibold">Please enter the code sent to your email!</h1>
            </div>
            <div class="mt-20">
                <form action="">
                    <div>
                        <input type="text">
                    </div>
                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
