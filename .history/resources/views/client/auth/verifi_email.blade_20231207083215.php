@extends('client.layouts.master')
@section('main')
    <div class="w-full h-screen bg-[#a19c9f] flex justify-center items-center">
        <div class="bg-[#f1ffff] rounded-xl">
            <div class="bg-[#0976b1] px-10 py-6 rounded-lg">
                <h1 class="text-white tracking-wide text-xl font-semibold">Please enter the code sent to your email!</h1>
            </div>
            <div class="px-10 mt-2 w-full">
                <form action="">
                    <div>
                        <input type="text" class="bg-[#0976b1]">
                    </div>
                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
