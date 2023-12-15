@extends('client.layouts.master')
@section('main')
    <div class="w-full h-screen bg-[#a19c9f] flex justify-center items-center">
        <div class="bg-[#f1ffff] rounded-xl">
            <div class="bg-[#0976b1] px-10 py-6 rounded-lg">
                <h1 class="text-white tracking-wide text-xl font-semibold">Please enter the code sent to your email!</h1>
            </div>
            <form action="">
                <div class="px-10 my-6 w-full grid grid-cols-3">
                    <div class="col-span-2">
                        <input type="text" class="bg-[#0976b1] w-full text-lg rounded-lg p-2">
                    </div>
                    <div>
                        <button>Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
