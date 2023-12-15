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
        <div class="mt-3">
            <div class="bg-[#283046] rounded-lg py-3 px-5">
                <div class="bg-[#28424a] rounded-full p-3">
                    <i class="fas fa-level-up-alt text-[#288a5e]"></i>
                </div>
                <div class="mt-2">
                    <h1 class="text-[#acafb7] text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div>
                    <p>Tổng nạp</p>
                </div>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
@endsection
