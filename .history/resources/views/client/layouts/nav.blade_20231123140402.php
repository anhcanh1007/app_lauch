<div class="h-20 bg-[#18172d] w-full px-28 text-white font-semibold font-lato fixed">
    <div class="grid grid-cols-3">
        <div class="col-span-1">
            <div class="col-span-4 flex">
                <div>
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/logo.jpg') }}" alt="" class=" h-20">
                    </a>
                </div>
                <div class="flex items-center">
                    <span class="text-white text-3xl justify-center">DIFI</span>
                </div>
            </div>
        </div>
        <div class="col-span-2 flex justify-around items-center text-lg">
            <div>
                <a href="{{ route('dashboard') }}" class="hover:text-blue-500 duration-150 cursor-pointer">Home</a>
            </div>
            <div>
                <a href="{{ route('about') }}" class="hover:text-blue-500 duration-150 cursor-pointer">About Us</a>
            </div>
            <div>
                <a href="{{ route('bounty') }}" class="hover:text-blue-500 duration-150 cursor-pointer">Bounty</a>
            </div>
            <div>
                <a href="{{ route('faq') }}" class="hover:text-blue-500 duration-150 cursor-pointer">F.A.Q</a>
            </div>
            <div>
                <a href="{{ route('blog') }}" class="hover:text-blue-500 duration-150 cursor-pointer">Blog</a>
            </div>
            <div>
                <a href="{{ route('contact') }}" class="hover:text-blue-500 duration-150 cursor-pointer">Contact</a>
            </div>
            <div>
                <button
                    class="bg-[#18172d] rounded-lg border-solid border-2 border-indigo-600 px-6 py-2 hover:bg-[#6F7CDC] cursor-pointer duration-500"><a
                        href="{{ route('view_login') }}">Connect</a></button>
            </div>
            @if (auth()->user())
                <div class="flex text-[#d8eff6]">
                    <div id="profile">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <div class="mr-2"><i class="fas fa-sign-out-alt"></i></div>
                        <div>
                            <a href="">
                                <p>Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ml-5">
                    <div>
                        <p class="">{{ auth()->user()->username }}</p>
                    </div>
                </div>
        </div>
        @endif
    </div>
</div>
</div>
