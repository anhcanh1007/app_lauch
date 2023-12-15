@extends('client.layouts.master')

@section('main')
    <div class="my-20 p-10 flex justify-center">
        <div class="w-[33%] shadow-lg p-10 bg-[#ffffff]">
            <div class="bg-[#ffffff] p-8 rounded-xl shadow-2xl">
                <div class="flex justify-center mb-4">
                    <h1 class="text-xl tracking-wide font-semibold">Please enter your email!</h1>
                </div>
                <div class="p-6">
                    <form action="">
                        <div class="mb-2">
                            <input type="text" name="email" placeholder="exapmle@gamil.com"
                                class="w-full bg-[#fafafc] p-2 rounded-md">
                        </div>
                        <div>
                            <button class="bg-[#212121] px-6 py-2 w-full text-center rounded-lg text-white">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
