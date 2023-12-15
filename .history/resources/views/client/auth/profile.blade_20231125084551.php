@extends('client.layouts.master')
@section('main')
    <div class="bg-[#ffff] grid grid-cols-4 px-32 my-32 gap-5">
        <div class="col-span-1 bg-[#f6f2e6] w-full p-4 rounded-xl">
            <div>
                <div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/avt.jpg') }}" alt="" class="w-28 h-28 rounded-full">
                    </div>
                    <div class="flex justify-center mt-2">
                        <p class="text-black font-semibold tracking-wide text-lg">anh canh2</p>
                    </div>
                    <div class="flex justify-center text-[#d0b263] font-semibold tracking-wide text-xl mt-2">
                        <div class="mr-2">90$</div>
                        <div><a href=""><i class="fas fa-wallet text-black"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex justify-center items-center">
                <div class="">
                    <form action="">
                        <button>Create Your Referral Code</button>
                    </form>
                </div>
                <div>
                    <p>Your Referral Code: </p>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div>
                <h1 class="text-xl font-semibold tracking-wide">Profile Information</h1>
            </div>
            <div class="bg-[#fafafa] p-6 rounded-xl mt-4">
                <div>
                    <form action="">
                        <div class="grid grid-cols-2 gap-10">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">First Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Last Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Email Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl"
                                        value="{{ $user->email }}" readonly>
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Phone Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Address</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Referral Code</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl"
                                        value="{{ $user->refcode }}">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-8">
                            <button
                                class="bg-[#8e9bb2] px-10 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#d0b263] cursor-pointer delay-150 ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div>
                <h1 class="text-xl font-semibold tracking-wide">Change Password</h1>
            </div>
            <div class="bg-[#fafafa] p-6 rounded-xl mt-4">
                <div>
                    <form action="">
                        <div class="grid gap-2">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">New Password</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Confirm New Password</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4">
                            <button
                                class="bg-[#8e9bb2] px-10 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#d0b263] cursor-pointer delay-150">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
