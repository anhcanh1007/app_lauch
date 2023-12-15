@extends('client.layouts.master')
@section('main')
    <div class="bg-[#ffff] grid grid-cols-4 px-32 mt-10 mb-10 gap-5">
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
                                    <input type="text" class="w-full bg-[#f3f3f3] p-4">
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div>
                                    <label for="">Last Name</label>
                                </div>
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-around">
                            <div>
                                <div>
                                    <label for="">Email</label>
                                </div>
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="">Phone</label>
                                </div>
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-around">
                            <div>
                                <div>
                                    <label for="">Address</label>
                                </div>
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="">Refcode</label>
                                </div>
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div>
                <h1>Change Password</h1>
            </div>
        </div>
    </div>
@endsection
