@extends('client.layouts.master')

@section('main')
    <div class="my-20 p-10 flex justify-center">
        <div class="w-[33%] shadow-lg p-10 bg-[#ffffff]">
            <div class="bg-[#ffffff] p-8 rounded-xl shadow-2xl">
                <div class="flex justify-center items-center mb-4">
                    <h1 class="text-2xl tracking-wide font-semibold">Please enter your email!</h1>
                </div>
                <div class="">
                    <p class="text-sm tracking-wide font-semibold">Password will be sent to your email</p>
                </div>
                <div class="p-6">
                    <form action="{{ route('forgot_password') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="exapmle@gamil.com"
                                class="w-full bg-[#fafafc] p-2 rounded-md">
                        </div>
                        <div>
                            <button
                                class="bg-[#212121] px-6 py-2 w-full text-center rounded-lg text-white tracking-wide font-semibold hover:bg-[#343d55] duration-200">Submit</button>
                        </div>
                        @if ($errors->has('errors'))
                            <div>
                                <p class="text-red-600 tracking-wide font-semibold">{{ $errors->first('errors') }}</p>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
