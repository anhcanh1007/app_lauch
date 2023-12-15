@extends('client.layouts.master')

@section('main')
    <div class="bg-[#f7f8f8] w-full px-32">
        <div class="pt-20 flex justify-center items-center">
            <button class="bg-[#6ba8d7] px-4 py-2 text-xl rounded-xl tracking-wide font-medium">Get Unlimited
                Rewards</button>
        </div>
        <div class="flex justify-center items-center mt-5">
            <h1 class="text-xl tracking-wide font-medium">Bounty Program</h1>
        </div>
        <div class="mt-5 flex justify-start">
            <div class="mr-3"><button
                    class="bg-[#1e1e1e] text-white text-base font-medium rounded-lg tracking-wide px-4 py-2 hover:bg-[#283046] duration-300"
                    onclick="showDiv1()">Youtube</button>
            </div>
            <div class="mr-3"><button
                    class="bg-[#1e1e1e] text-white text-base font-medium rounded-lg tracking-wide px-4 py-2 hover:bg-[#283046] duration-300"
                    onclick="showDiv2()">Trustpilot</button>
            </div>
            <div class="mr-3"><button
                    class="bg-[#1e1e1e] text-white text-base font-medium rounded-lg tracking-wide px-4 py-2 hover:bg-[#283046] duration-300"
                    onclick="showDiv3()">Google</button>
            </div>
            <div class="mr-3"><button
                    class="bg-[#1e1e1e] text-white text-base font-medium rounded-lg tracking-wide px-4 py-2 hover:bg-[#283046] duration-300"
                    onclick="showDiv4()">GG
                    Map</button></div>
        </div>
        <div class="px-10 flex justify-between items-center mt-10 mb-20" id="div1">
            <div class="w-[30%] px-6">
                <div class="mb-3">
                    <h1 class="text-2xl tracking-wide font-medium">Bonus from $10 - $80</h1>
                </div>
                <div class="mb-6">
                    <p>Requirements: meet bonus conditions. The amount of the reward depends on the content of your account,
                        the number of friends and the quality of the videos and texts in it.</p>
                </div>
                <div>
                    <button
                        class="bg-[#7d47cb] px-4 py-2 text-base tracking-wide rounded-lg text-white hover:bg-[#528ebb] duration-200">Start
                        Video</button>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-4 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Working conditions</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">You must follow us on Facebook, YouTube, Telegram.</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">Video is not copied from another channel</li>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-7 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Participation rules</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">Video reached over 1k views</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">The length of the video must be at least 30 seconds.</li>
                </div>
            </div>
        </div>
        <div class="px-10 flex justify-between items-center mt-10 mb-20" style="display: none" id="div2">
            <div class="w-[30%] px-6">
                <div class="mb-3">
                    <h1 class="text-2xl tracking-wide font-medium">Bonus from $10 - $80</h1>
                </div>
                <div class="mb-6">
                    <p>Requirements: meet bonus conditions. The amount of the reward depends on the content of your account,
                        the number of friends and the quality of the videos and texts in it.</p>
                </div>
                <div>
                    <button
                        class="bg-[#7d47cb] px-4 py-2 text-base tracking-wide rounded-lg text-white hover:bg-[#528ebb] duration-200">Start
                        Video</button>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-4 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Working conditions</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">You must follow us on Facebook, YouTube, Telegram.</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">Video is not copied from another channel</li>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-7 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Participation rules</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">Video reached over 1k views</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">The length of the video must be at least 30 seconds.</li>
                </div>
            </div>
        </div>
        <div class="px-10 flex justify-between items-center mt-10 mb-20" style="display: none" id="div3">
            <div class="w-[30%] px-6">
                <div class="mb-3">
                    <h1 class="text-2xl tracking-wide font-medium">Bonus from $10 - $80</h1>
                </div>
                <div class="mb-6">
                    <p>Requirements: meet bonus conditions. The amount of the reward depends on the content of your account,
                        the number of friends and the quality of the videos and texts in it.</p>
                </div>
                <div>
                    <button
                        class="bg-[#7d47cb] px-4 py-2 text-base tracking-wide rounded-lg text-white hover:bg-[#528ebb] duration-200">Start
                        Video</button>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-4 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Working conditions</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">You must follow us on Facebook, YouTube, Telegram.</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">Video is not copied from another channel</li>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-7 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Participation rules</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">Video reached over 1k views</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">The length of the video must be at least 30 seconds.</li>
                </div>
            </div>
        </div>
        <div class="px-10 flex justify-between items-center mt-10 mb-20" style="display: none" id="div4">
            <div class="w-[30%] px-6">
                <div class="mb-3">
                    <h1 class="text-2xl tracking-wide font-medium">Bonus from $10 - $80</h1>
                </div>
                <div class="mb-6">
                    <p>Requirements: meet bonus conditions. The amount of the reward depends on the content of your account,
                        the number of friends and the quality of the videos and texts in it.</p>
                </div>
                <div>
                    <button
                        class="bg-[#7d47cb] px-4 py-2 text-base tracking-wide rounded-lg text-white hover:bg-[#528ebb] duration-200">Start
                        Video</button>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-4 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Working conditions</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">You must follow us on Facebook, YouTube, Telegram.</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">Video is not copied from another channel</li>
                </div>
            </div>
            <div class="w-[30%] bg-[#0f0f11] px-6 py-7 rounded-2xl">
                <div class="mb-3">
                    <h2 class="text-white text-2xl">Participation rules</h2>
                </div>
                <div class="mb-3">
                    <li class="text-xl text-[#969696]">Video reached over 1k views</li>
                </div>
                <div>
                    <li class="text-xl text-[#969696]">The length of the video must be at least 30 seconds.</li>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
