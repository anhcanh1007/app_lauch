@extends('backend.layouts.master')

@section('main')
    <div>
        <div class="mt-4">
            <span class="text-[#acafb7] text-2xl tracking-wide font-medium">Bảng chính</span>
        </div>
        <div class="mt-6">
            <p class="text-[#acafb7] text-base tracking-wide">Giờ hệ thống:
                {{ \Carbon\Carbon::now()->toDateTimeString() }}</p>
        </div>
        <div class="mt-3 flex justify-between">
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#28424a] rounded-full p-4 flex justify-center">
                    <i class="fas fa-level-up-alt text-[#288a5e] text-xl"></i>
                </div>
                <div class="mt-4">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng nạp</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#3f3447] rounded-full p-4 flex justify-center">
                    <i class="fas fa-level-down-alt text-[#e15254] text-xl"></i>
                </div>
                <div class="mt-4">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng rút</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#234359] rounded-full p-4 flex justify-center">
                    <i class="fas fa-users text-[#108fa7] text-xl"></i>
                </div>
                <div class="mt-4">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2">
                    <p class="text-[#acafb7] text-base tracking-wide">Khách</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#31375a] rounded-full p-4 flex justify-center">
                    <i class="fas fa-chart-line text-[#625ac8] text-xl"></i>
                </div>
                <div class="mt-4">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng nạp</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#28424a] rounded-full p-4 flex justify-center">
                    <i class="fas fa-piggy-bank text-[#288a5e] text-xl"></i>
                </div>
                <div class="mt-4">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng nạp</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#28424a] rounded-full p-4 flex justify-center">
                    <i class="fas fa-snowt text-[#288a5e] text-xl"></i>
                </div>
                <div class="mt-4">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng nạp</p>
                </div>
            </div>
        </div>
    </div>
@endsection
