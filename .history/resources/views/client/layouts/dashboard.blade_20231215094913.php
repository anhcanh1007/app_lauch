@extends('client.layouts.master')
@section('main')
    <div class="w-full h-screen bg-cover flex justify-between font-lato pl-32 py-20
    "
        style="background-image: url({{ asset('/images/back.jpg') }})">
        <div>
            <h1 class="text-white text-6xl font-bold mb-6">Up to 748% APY on</h1>
            <h1 class="text-white text-6xl font-bold">AI Trading</h1>
            <h2 class="text-[#04a3fa] text-2xl mt-8 mb-2">Trade crypto like a pro without being one. Use
                our
            </h2>
            <h2 class="text-[#04a3fa] text-2xl">powerful AI trading. Trade faster. Maximize results.</h2>
            <div class="flex mt-20">
                <div class="mr-4">
                    <button class="bg-[#02a3fe] px-6 py-4 rounded-xl hover:bg-[#4757E5] duration-500">
                        <span class="text-white font-semibold text-xl mr-2"><a
                                href="{{ route('showFormRegister') }}">Register</a></span> <i
                            class="fas fa-arrow-circle-right text-white text-xl"></i>
                    </button>
                </div>
                <div>
                    <button class="bg-[#02a3fe] px-6 py-4 rounded-xl hover:bg-[#4757E5] duration-500">
                        <span class="text-white font-semibold text-xl mr-2"><a
                                href="{{ route('contact') }}">Contact</a></span> <i
                            class="fas fa-arrow-circle-right text-white text-xl"></i>
                    </button>
                </div>

            </div>
        </div>
        <div><img src="{{ asset('images/digitalwallet.png') }}" class="hover:rotate-45 duration-500" alt="hinhanh">
        </div>
    </div>
    <div class="w-full bg-[#e9f7ff] px-32 py-24 font-lato grid grid-cols-2 gap-20">
        <div class="font-mono grid gap-8">
            <div class="text-[#1e1e26] text-5xl font-black tracking-wide">
                <h1>With <span class="text-[#02a3fe]">DIFI</span></h1>
                <h1>you can make a</h1>
                <h1>profit even when</h1>
                <h1>you sleep.</h1>
            </div>
            <div class="text-[#02a3fe] text-3xl font-semibold tracking-wide">
                <h1>Get start in a few minutes</h1>
            </div>
            <div class="grid gap-3 text-xl">
                <div>
                    <button class="bg-[#02a3fe] px-2 py-1 rounded-full">1</button><span
                        class="text-[#528ebb] font-semibold ml-2">Create your
                        account</span>
                </div>
                <div>
                    <button class="bg-[#02a3fe] px-2 py-1 rounded-full">2</button><span
                        class="text-[#528ebb] font-semibold ml-2">Transfer funds to your balance</span>
                </div>
                <div>
                    <button class="bg-[#02a3fe] px-2 py-1 rounded-full">3</button><span
                        class="text-[#528ebb] font-semibold ml-2">Choose an AI</span>
                </div>
                <div>
                    <button class="bg-[#02a3fe] px-2 py-1 rounded-full">4</button><span
                        class="text-[#528ebb] font-semibold ml-2">Get daily profit</span>
                </div>
            </div>
            <div>
                <button
                    class="bg-[#02a3fe] px-6 py-3 rounded-xl text-white font-semibold text-xl hover:bg-[#1725FF] duration-500">Start</button>
            </div>
        </div>
        <div class="grid gap-5">
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/coin3.png') }}" class="w-16 h-16" alt="">
            </div>
            <div class="flex justify-around">
                <div>
                    <img src="{{ asset('images/coin2.png') }}" class="w-16 h-16" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/coin4.png') }}" class="w-16 h-16" alt="">
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/coin8.png') }}" class="w-16 h-16" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/logo.jpg') }}" class="w-32 h-32 rounded-full" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/coin5.png') }}" class="w-16 h-16" alt="">
                </div>
            </div>
            <div class="flex justify-around">
                <div>
                    <img src="{{ asset('images/coin7.png') }}" class="w-16 h-16" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/coin1.png') }}" class="w-16 h-16" alt="">
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/coin6.png') }}" class="w-16 h-16" alt="">
            </div>
        </div>
    </div>
    <div class="px-32 bg-[#e9f7ff] w-full pt-20 pb-40 font-lato">
        <div class="flex flex-col justify-center items-center">
            <button class="bg-[#33c1f5] text-white text-2xl font-semibold rounded-md px-4 py-2">Increase Cash
                Flow</button>
            <h1 class="text-2xl text-[#E3144A] font-semibold mt-2">Fund Invest Plan</h1>
        </div>
        <div class="mt-6 flex flex-wrap justify-between">
            <div class="bg-[#1e1e26] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
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
                    <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl" id="invest_eurusd"
                        onclick="invest_eurusd()">Invest
                        Now</button>
                </div>
            </div>
            <div class="bg-[#1e1e26] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
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
                    <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl" id="invest_gbpusd"
                        onclick="invest_gbpusd()">Invest Now</button>
                </div>
            </div>
            <div class="bg-[#1e1e26] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
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
                    <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl" id="invest_jpyusd"
                        onclick="invest_jpyusd()">Invest Now</button>
                </div>
            </div>
            <div class="bg-[#1e1e26] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
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
                    <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl" id="invest_ethusdt"
                        onclick="invest_ethusdt()">Invest Now</button>
                </div>
            </div>
            <div class="bg-[#1e1e26] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
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
                    <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl" id="invest_xauusd"
                        onclick="invest_xauusd()">Invest Now</button>
                </div>
            </div>
            <div class="bg-[#1e1e26] py-10 text-white rounded-2xl w-[30%] mb-6 hover:-translate-y-3 duration-300">
                <div class="flex justify-center items-center">
                    <div><img src="{{ asset('images/coin7.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
                    <div><img src="{{ asset('images/coin8.png') }}" alt="" class="w-10 h-10 rounded-full"></div>
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
                    <button class="bg-[#d740a5] px-4 py-2 text-base font-medium rounded-xl" id="invest_btcusdt"
                        onclick="invest_btcusdt()">Invest Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-[#e9f7ff] pb-20 px-72 grid grid-cols-2 font-lato">
        <div class="bg-[#1e1e1e] rounded-tl-xl rounded-bl-xl px-20">
            <div class="pt-10">
                <h1 class="text-white text-3xl font-semibold tracking-wide">Partner Rewards</h1>
            </div>
            <div class="mt-4">
                <p class="text-[#6a6a6a] text-base">Receive 2 types of rewards at the same time</p>
            </div>
            <div class="mt-7">
                <button
                    class="bg-[#a244bb] py-3 px-8 text-white w-full rounded-xl font-semibold text-xl hover:bg-[#d740a5] duration-300">Join
                    Now</button>
            </div>
            <div class="mt-4 text-center text-yellow-300">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="mt-4 mb-4">
                <p class="text-[#6a6a6a] text-center">Rated 4.5/5 Stars in 1000+ partners.</p>
            </div>
        </div>
        <div class="bg-[#0f0f11] rounded-tr-xl rounded-br-xl pl-16 flex flex-col pb-10">
            <div class="pt-10 flex flex-col mb-4">
                <h1 class="text-white text-2xl font-semibold tracking-wide mb-2">4 Levels Get Direct Bonus</h1>
                <div>
                    <i class="fas fa-check  mr-2 text-[#6a6a6a]"></i><span class="text-[#6a6a6a]">6% - 2% - 1% -
                        1%</span>
                </div>
                <div>
                    <i class="fas fa-check mr-2 text-[#6a6a6a]"></i><span class="text-[#6a6a6a]">After the investment
                        partner</span>
                </div>
                <div>
                    <i class="fas fa-check mr-2 text-[#6a6a6a]"></i><span class="text-[#6a6a6a]">Get 1 time</span>
                </div>
            </div>
            <div class="flex flex-col">
                <h1 class="text-white text-2xl font-semibold tracking-wide mb-2">4 Levels Share Profit</h1>
                <div>
                    <i class="fas fa-check mr-2 text-[#6a6a6a]"></i><span class="text-[#6a6a6a]">10% - 5% - 5% - 5%</span>
                </div>
                <div>
                    <i class="fas fa-check mr-2 text-[#6a6a6a]"></i><span class="text-[#6a6a6a]">After the fund is
                        completed</span>
                </div>
                <div>
                    <i class="fas fa-check mr-2 text-[#6a6a6a]"></i><span class="text-[#6a6a6a]">Received daily</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center" id="div_eurusd">
        <div
            class="w-[35%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#283146] p-8 rounded-lg z-50">
            <div class="pt-4">
                <h1 class="text-xl text-white tracking-wide font-medium">EURUSD</h1>
            </div>
            <div class="mt-6 text-[#a3a3a3] text-xl">
                <li>Invest: $50 - $4999</li>
                <li>Interest: 0.80 % Per 24 hours</li>
                <li>Lifetime - Withdraw principal anytime</li>
            </div>
            <div class="mt-6">
                <h1 class="text-white text-2xl tracking-wide font-medium">Amount($)</h1>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="w-full">
                        <input type="number" placeholder="Enter Amount"
                            class="text-base px-4 py-2 w-full border border-gray-300 rounded-lg bg-[#283146] text-white focus:bg-[#ffffff]"
                            style="color: black" onfocus="this.style.color='black'" onblur="this.style.color='white'"
                            id="id_eurusd">
                    </div>
                    @if (auth()->user())
                    <div class="mt-4 flex justify-center">
                        <button
                            class="bg-[#a644ba] px-6 py-3 text-white font-medium tracking-wide rounded-xl hover:bg-[#f67373] duration-300">Invest
                            Now</button>
                    </div>
                    @else
                    <div>
                        <h1><a href="">You need login </a></h1>
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center" id="div_gbpusd">
        <div
            class="w-[35%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#283146] p-8 rounded-lg z-50">
            <div class="pt-4">
                <h1 class="text-xl text-white tracking-wide font-medium">EURUSD</h1>
            </div>
            <div class="mt-6 text-[#a3a3a3] text-xl">
                <li>Invest: $50 - $50000</li>
                <li>Interest: 1.00 % Per 24 hours</li>
                <li>Refund after 30 Days</li>
            </div>
            <div class="mt-6">
                <h1 class="text-white text-2xl tracking-wide font-medium">Amount($)</h1>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="w-full">
                        <input type="number" placeholder="Enter Amount"
                            class="text-base px-4 py-2 w-full border border-gray-300 rounded-lg bg-[#283146] text-white focus:bg-[#ffffff]"
                            style="color: black" onfocus="this.style.color='black'" onblur="this.style.color='white'"
                            id="id_gbpusd">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <button
                            class="bg-[#a644ba] px-6 py-3 text-white font-medium tracking-wide rounded-xl hover:bg-[#f67373] duration-300">Invest
                            Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center" id="div_jpyusd">
        <div
            class="w-[35%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#283146] p-8 rounded-lg z-50">
            <div class="pt-4">
                <h1 class="text-xl text-white tracking-wide font-medium">EURUSD</h1>
            </div>
            <div class="mt-6 text-[#a3a3a3] text-xl">
                <li>Invest: $5000 - $100000</li>
                <li>Interest: 1.20 % Per 24 hours</li>
                <li>Lifetime - Withdraw principal anytime</li>
            </div>
            <div class="mt-6">
                <h1 class="text-white text-2xl tracking-wide font-medium">Amount($)</h1>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="w-full">
                        <input type="number" placeholder="Enter Amount"
                            class="text-base px-4 py-2 w-full border border-gray-300 rounded-lg bg-[#283146] text-white focus:bg-[#ffffff]"
                            style="color: black" onfocus="this.style.color='black'" onblur="this.style.color='white'"
                            id="id_jpyusd">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <button
                            class="bg-[#a644ba] px-6 py-3 text-white font-medium tracking-wide rounded-xl hover:bg-[#f67373] duration-300">Invest
                            Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center" id="div_ethusdt">
        <div
            class="w-[35%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#283146] p-8 rounded-lg z-50">
            <div class="pt-4">
                <h1 class="text-xl text-white tracking-wide font-medium">EURUSD</h1>
            </div>
            <div class="mt-6 text-[#a3a3a3] text-xl">
                <li>Invest: $50 - $4999</li>
                <li>Interest: 2.00 % Per 24 hours</li>
                <li>Refund after 45 Days</li>
            </div>
            <div class="mt-6">
                <h1 class="text-white text-2xl tracking-wide font-medium">Amount($)</h1>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="w-full">
                        <input type="number" placeholder="Enter Amount"
                            class="text-base px-4 py-2 w-full border border-gray-300 rounded-lg bg-[#283146] text-white focus:bg-[#ffffff]"
                            style="color: black" onfocus="this.style.color='black'" onblur="this.style.color='white'"
                            id="id_ethusdt">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <button
                            class="bg-[#a644ba] px-6 py-3 text-white font-medium tracking-wide rounded-xl hover:bg-[#f67373] duration-300">Invest
                            Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center" id="div_xauusd">
        <div
            class="w-[35%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#283146] p-8 rounded-lg z-50">
            <div class="pt-4">
                <h1 class="text-xl text-white tracking-wide font-medium">EURUSD</h1>
            </div>
            <div class="mt-6 text-[#a3a3a3] text-xl">
                <li>Invest: $50 - $100000</li>
                <li>Interest: 8.00 % Per 24 hours</li>
                <li>Refund after 35 Days</li>
            </div>
            <div class="mt-6">
                <h1 class="text-white text-2xl tracking-wide font-medium">Amount($)</h1>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="w-full">
                        <input type="number" placeholder="Enter Amount"
                            class="text-base px-4 py-2 w-full border border-gray-300 rounded-lg bg-[#283146] text-white focus:bg-[#ffffff]"
                            style="color: black" onfocus="this.style.color='black'" onblur="this.style.color='white'"
                            id="id_xauusd">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <button
                            class="bg-[#a644ba] px-6 py-3 text-white font-medium tracking-wide rounded-xl hover:bg-[#f67373] duration-300">Invest
                            Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center" id="div_btcusdt">
        <div
            class="w-[35%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#283146] p-8 rounded-lg z-50">
            <div class="pt-4">
                <h1 class="text-xl text-white tracking-wide font-medium">EURUSD</h1>
            </div>
            <div class="mt-6 text-[#a3a3a3] text-xl">
                <li>Invest: $1000 - $100000</li>
                <li>Interest: 10.00 % Per 24 hours</li>
                <li>Refund after 60 Days</li>
            </div>
            <div class="mt-6">
                <h1 class="text-white text-2xl tracking-wide font-medium">Amount($)</h1>
            </div>
            <div class="mt-4">
                <form action="">
                    <div class="w-full">
                        <input type="number" placeholder="Enter Amount"
                            class="text-base px-4 py-2 w-full border border-gray-300 rounded-lg bg-[#283146] text-white focus:bg-[#ffffff]"
                            style="color: black" onfocus="this.style.color='black'" onblur="this.style.color='white'"
                            id="id_btcusdt">
                    </div>
                    <div class="mt-4 flex justify-center">
                        <button
                            class="bg-[#a644ba] px-6 py-3 text-white font-medium tracking-wide rounded-xl hover:bg-[#f67373] duration-300">Invest
                            Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const button_eurusd = document.getElementById('invest_eurusd');
        const button_gbpusd = document.getElementById('invest_gbpusd');
        const button_jpyusd = document.getElementById('invest_jpyusd');
        const button_ethusdt = document.getElementById('invest_ethusdt');
        const button_xauusd = document.getElementById('invest_xauusd');
        const button_btcusdt = document.getElementById('invest_btcusdt');

        const div_eurusd = document.getElementById('div_eurusd');
        const div_gbpusd = document.getElementById('div_gbpusd');
        const div_jpyusd = document.getElementById('div_jpyusd');
        const div_ethusdt = document.getElementById('div_ethusdt');
        const div_xauusd = document.getElementById('div_xauusd');
        const div_btcusdt = document.getElementById('div_btcusdt');

        const id_eurusd = document.getElementById('id_eurusd');
        const id_gbpusd = document.getElementById('id_gbpusd');
        const id_jpyusd = document.getElementById('id_jpyusd');
        const id_ethusdt = document.getElementById('id_ethusdt');
        const id_xauusd = document.getElementById('id_xauusd');
        const id_btcusdt = document.getElementById('id_btcusdt');


        div_eurusd.style.display = "none";
        div_gbpusd.style.display = "none";
        div_jpyusd.style.display = "none";
        div_ethusdt.style.display = "none";
        div_xauusd.style.display = "none";
        div_btcusdt.style.display = "none";

        //hàm khi click vào button thì div sẽ hiện ra
        function invest_eurusd() {
            document.getElementById('div_eurusd').style.display = "block";
        }

        function invest_gbpusd() {
            document.getElementById('div_gbpusd').style.display = "block";
        }

        function invest_jpyusd() {
            document.getElementById('div_jpyusd').style.display = "block";
        }

        function invest_ethusdt() {
            document.getElementById('div_ethusdt').style.display = "block";
        }

        function invest_xauusd() {
            document.getElementById('div_xauusd').style.display = "block";
        }

        function invest_btcusdt() {
            document.getElementById('div_btcusdt').style.display = "block";
        }

        //kiểm tra xem nếu sự kiện xảy ra ngoài div và button và input thì div sẽ biến mất
        document.addEventListener("click", function(event) {
            if (event.target !== button_eurusd && event.target !== div_eurusd && event.target !== id_eurusd) {
                div_eurusd.style.display = "none";
            }
        });
        document.addEventListener("click", function(event) {
            if (event.target !== button_gbpusd && event.target !== div_gbpusd && event.target !== id_gbpusd) {
                div_gbpusd.style.display = "none";
            }
        });
        document.addEventListener("click", function(event) {
            if (event.target !== button_jpyusd && event.target !== div_jpyusd && event.target !== id_jpyusd) {
                div_jpyusd.style.display = "none";
            }
        });
        document.addEventListener("click", function(event) {
            if (event.target !== button_ethusdt && event.target !== div_ethusdt && event.target !== id_ethusdt) {
                div_ethusdt.style.display = "none";
            }
        });
        document.addEventListener("click", function(event) {
            if (event.target !== button_xauusd && event.target !== div_xauusd && event.target !== id_xauusd) {
                div_xauusd.style.display = "none";
            }
        });
        document.addEventListener("click", function(event) {
            if (event.target !== button_btcusdt && event.target !== div_btcusdt && event.target !== id_btcusdt) {
                div_btcusdt.style.display = "none";
            }
        });
    </script>
@endsection
