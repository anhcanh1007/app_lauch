@extends('client.layouts.master')
@section('main')
    <div class="bg-[#190d0f]">
        <div>
            <div>
                <button>Latests News</button>
            </div>
            <div>
                <h1>Our Company and Market</h1>
            </div>
        </div>
        <div class="px-32 bg-[#060606] w-full pt-20 pb-40">
            <div class="flex flex-col justify-center items-center">
                <button class="bg-[#33c1f5] text-white text-2xl font-semibold rounded-md px-4 py-2">Increase Cash
                    Flow</button>
                <h1 class="text-2xl text-[#E3144A] font-semibold mt-2">Fund Invest Plan</h1>
            </div>
            <div class="mt-6 flex flex-wrap justify-between">
                <div class="bg-[#222c31] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div class="flex justify-center items-center">
                        <div><img src="{{ asset('images/eu.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                        <div><img src="{{ asset('images/my.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold tracking-wide">EURUSD</h2>
                    </div>
                    <div class="bg-[#1e1e1e] text-center px-4 py-8 mt-4">
                        <h1 class="text-5xl font-semibold">0.8%</h1>
                        <p class="text-base mt-2">Daily Profit</p>
                    </div>
                    <div class="text-xl tracking-wide text-center mt-4">
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>From $50 - $4999</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Withdraw capital anytime</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Lifetime Earning</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center items-center">
                        <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl">Invest Now</button>
                    </div>
                </div>
                <div class="bg-[#222c31] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div class="flex justify-center items-center">
                        <div><img src="{{ asset('images/anh.jpg') }}" alt="" class="w-10 h-10 rounded-full"></div>
                        <div><img src="{{ asset('images/my.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold tracking-wide">GBPUSD</h2>
                    </div>
                    <div class="bg-[#1e1e1e] text-center px-4 py-8 mt-4">
                        <h1 class="text-5xl font-semibold">30%</h1>
                        <p class="text-base mt-2">Profit</p>
                    </div>
                    <div class="text-xl tracking-wide text-center mt-4">
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>From $50 - $50000</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>After 30 Day</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Refund 30% + <button
                                    class="px-2 py-1 rounded-lg text-white font-medium bg-[#198754]">Fund</button></span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center items-center">
                        <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl">Invest Now</button>
                    </div>
                </div>
                <div class="bg-[#222c31] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div class="flex justify-center items-center">
                        <div><img src="{{ asset('images/nhat.jpg') }}" alt="" class="w-10 h-10 rounded-full"></div>
                        <div><img src="{{ asset('images/my.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold tracking-wide">JPYUSD</h2>
                    </div>
                    <div class="bg-[#1e1e1e] text-center px-4 py-8 mt-4">
                        <h1 class="text-5xl font-semibold">1.2%</h1>
                        <p class="text-base mt-2">Daily Profit</p>
                    </div>
                    <div class="text-xl tracking-wide text-center mt-4">
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>From $5000 - $100000</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Withdraw capital anytime</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Lifetime Earning</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center items-center">
                        <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl">Invest Now</button>
                    </div>
                </div>
                <div class="bg-[#222c31] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div class="flex justify-center items-center">
                        <div><img src="{{ asset('images/coin3.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                        <div><img src="{{ asset('images/coin8.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold tracking-wide">ETHUSDT</h2>
                    </div>
                    <div class="bg-[#1e1e1e] text-center px-4 py-8 mt-4">
                        <h1 class="text-5xl font-semibold">90%</h1>
                        <p class="text-base mt-2">Profit</p>
                    </div>
                    <div class="text-xl tracking-wide text-center mt-4">
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>From $50 - $4999</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Get daily interest</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Refund <button
                                    class="px-2 py-1 rounded-lg text-white font-medium bg-[#198754]">Fund</button> after 45
                                days</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center items-center">
                        <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl">Invest Now</button>
                    </div>
                </div>
                <div class="bg-[#222c31] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div class="flex justify-center items-center">
                        <div><img src="{{ asset('images/xa.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                        <div><img src="{{ asset('images/my.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold tracking-wide">XAUUSD</h2>
                    </div>
                    <div class="bg-[#1e1e1e] text-center px-4 py-8 mt-4">
                        <h1 class="text-5xl font-semibold">280%</h1>
                        <p class="text-base mt-2">Profit</p>
                    </div>
                    <div class="text-xl tracking-wide text-center mt-4">
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>From $50 - $100000</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>After 35 Day</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Refund 280% + <button
                                    class="px-2 py-1 rounded-lg text-white font-medium bg-[#198754]">Fund</button></span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center items-center">
                        <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl">Invest Now</button>
                    </div>
                </div>
                <div class="bg-[#222c31] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                    <div class="flex justify-center items-center">
                        <div><img src="{{ asset('images/coin7.png') }}" alt="" class="w-10 h-10 rounded-full">
                        </div>
                        <div><img src="{{ asset('images/coin8.png') }}" alt="" class="w-10 h-10 rounded-full">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-2xl font-bold tracking-wide">BTCUSDT</h2>
                    </div>
                    <div class="bg-[#1e1e1e] text-center px-4 py-8 mt-4">
                        <h1 class="text-5xl font-semibold">600%</h1>
                        <p class="text-base mt-2">Profit</p>
                    </div>
                    <div class="text-xl tracking-wide text-center mt-4">
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>From $1000 - $100000</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>After 60 Day</span>
                        </div>
                        <div class="mt-2">
                            <i class="fas fa-check mr-2"></i><span>Refund 600% + <button
                                    class="px-2 py-1 rounded-lg text-white font-medium bg-[#198754]">Fund</button></span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center items-center">
                        <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl">Invest Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
