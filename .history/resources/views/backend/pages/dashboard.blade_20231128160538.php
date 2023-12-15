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
                <div class="mt-4 flex justify-center">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2 flex justify-center">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng nạp</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#3f3447] rounded-full p-4 flex justify-center">
                    <i class="fas fa-level-down-alt text-[#e15254] text-xl"></i>
                </div>
                <div class="mt-4 flex justify-center">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2 flex justify-center">
                    <p class="text-[#acafb7] text-base tracking-wide">Tổng rút</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#234359] rounded-full p-4 flex justify-center">
                    <i class="fas fa-users text-[#108fa7] text-xl"></i>
                </div>
                <div class="mt-4 flex justify-center">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2 flex justify-center">
                    <p class="text-[#acafb7] text-base tracking-wide">Khách</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#31375a] rounded-full p-4 flex justify-center">
                    <i class="fas fa-chart-line text-[#625ac8] text-xl"></i>
                </div>
                <div class="mt-4 flex justify-center">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2 flex justify-center">
                    <p class="text-[#acafb7] text-base tracking-wide">Quỹ</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#28424a] rounded-full p-4 flex justify-center">
                    <i class="fas fa-piggy-bank text-[#288a5e] text-xl"></i>
                </div>
                <div class="mt-4 flex justify-center">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2 flex justify-center">
                    <p class="text-[#acafb7] text-base tracking-wide">Đang đầu tư</p>
                </div>
            </div>
            <div class="bg-[#283046] rounded-lg py-6 px-14 flex justify-center flex-col">
                <div class="bg-[#423d45] rounded-full p-4 flex justify-center">
                    <i class="fas fa-snowflake text-[#c88244] text-xl"></i>
                </div>
                <div class="mt-4 flex justify-center">
                    <h1 class="text-white text-2xl tracking-wide font-medium">$5870</h1>
                </div>
                <div class="mt-2 flex justify-center">
                    <p class="text-[#acafb7] text-base tracking-wide">Trả lãi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 grid grid-cols-2 gap-5">
        <div class="bg-[#283046] rounded-lg py-3">
            <div class="px-4">
                <h1 class="text-[#caccd1] text-xl tracking-wide font-semibold">Lệnh nạp gần đây</h1>
            </div>
            <div class="mt-6">
                <div class="w-full bg-[#343d55] text-[#caccd1] tracking-wide font-medium grid grid-cols-4 pl-4 gap-2 py-3">
                    <div>
                        <p class="text-sm">TÊN</p>
                    </div>
                    <div>
                        <p class="text-sm">SỐ TIỀN</p>
                    </div>
                    <div>
                        <p class="text-sm">TRẠNG THÁI</p>
                    </div>
                    <div>
                        <p class="text-sm">NGÀY</p>
                    </div>
                </div>
                <div class="w-full bg-[#283046] tracking-wide font-medium grid grid-cols-4 pl-4 gap-2 py-3">
                    <div>
                        <p class="text-sm">@themach</p>
                    </div>
                    <div>
                        <p class="text-sm">100 USDT</p>
                    </div>
                    <div>
                        <p class="text-sm">TRẠNG THÁI</p>
                    </div>
                    <div>
                        <p class="text-sm">NGÀY</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#283046] rounded-lg py-3">
            <div class="px-4">
                <h1 class="text-[#caccd1] text-xl tracking-wide font-semibold">Lệnh rút gần đây</h1>
            </div>
            <div class="mt-6">
                <table>
                    <tr class="bg-[#343d55]">
                        <td>TÊN</td>
                        <td>SỐ TIỀN</td>
                        <td>TRẠNG THÁI</td>
                        <td>NGÀY</td>
                    </tr>
                    <tr>
                        <td>
                            <p>@themach</p>
                        </td>
                        <td>
                            <p>100 USDT</p>
                        </td>
                        <td>
                            <p>Đã duyệt</p>
                        </td>
                        <td>
                            <p>09</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
