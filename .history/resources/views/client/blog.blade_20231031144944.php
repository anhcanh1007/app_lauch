
@section('main')
    <div>
        <div>
            <div>
                <button>Latests News</button>
            </div>
            <div>
                <h1>Our Company and Market</h1>
            </div>
        </div>
        <div>
            <div class="w-full bg-[#e9f7ff] px-32 py-24 grid grid-cols-2 gap-20">
                <div class="font-mono grid gap-8">
                    <div class="text-[#1e1e26] text-6xl font-black tracking-wide">
                        <h1>With <span class="text-[#02a3fe]">DIFI</span></h1>
                        <h1>you can make a</h1>
                        <h1>profit even when</h1>
                        <h1>you sleep.</h1>
                    </div>
                    <div class="text-[#02a3fe] text-4xl font-semibold tracking-wide">
                        <h1>Get start in a few minutes</h1>
                    </div>
                    <div class="grid gap-3">
                        <div>
                            <button class="bg-[#02a3fe] px-2 py-1 rounded-full">1</button><span
                                class="text-[#528ebb] text-2xl font-semibold ml-2">Create your
                                account</span>
                        </div>
                        <div>
                            <button class="bg-[#02a3fe] px-2 py-1 rounded-full">2</button><span
                                class="text-[#528ebb] text-2xl font-semibold ml-2">Transfer funds to your balance</span>
                        </div>
                        <div>
                            <button class="bg-[#02a3fe] px-2 py-1 rounded-full">3</button><span
                                class="text-[#528ebb] text-2xl font-semibold ml-2">Choose an AI</span>
                        </div>
                        <div>
                            <button class="bg-[#02a3fe] px-2 py-1 rounded-full">4</button><span
                                class="text-[#528ebb] text-2xl font-semibold ml-2">Get daily profit</span>
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
        </div>
    </div>
@endsection
