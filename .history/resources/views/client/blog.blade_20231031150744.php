@extends('client.layouts.master')
@section('main')
    <div class="bg-[#DADAD3] w-full px-32">
        <div class="pt-20 flex justify-center items-center flex-col">
            <div>
                <button class="bg-[#33c1f5] px-4 py-2 text-white text-xl font-semibold rounded-xl">Latests News</button>
            </div>
            <div class="mt-4 mb-10">
                <h1 class="text-5xl font-semibold">Our Company and Market</h1>
            </div>
        </div>
        <div class="w-full pt-20 pb-40">
            <div class="mt-6 flex flex-wrap justify-between">
                <div class="bg-[#222c31] text-white w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div>
                        <img src="{{ asset('images/default.png') }}" alt="">
                    </div>
                    <div class="bg-[#0f0f11] py-10 px-10">
                        <div>
                            <p class="text-[#5a5b5f]">New / 13 Apr, 2023 10:46 PM</p>
                        </div>
                        <div>
                            <h1 class="text-white">Biggest Movers: DOGE Snaps Losing Streak as SOL Hits Fresh 6...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
