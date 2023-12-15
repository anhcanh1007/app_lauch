@extends('client.layouts.master')
@section('main')
    <div class="bg-[#ffff] grid grid-cols-4 px-32 mt-10 mb-10">
        <div class="col-span-1 bg-[#f6f2e6] w-full p-4 rounded-xl">
            <div>
                <div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/avt.jpg') }}" alt="" class="w-28 h-28 rounded-full">
                    </div>
                    <div class="flex justify-center mt-2">
                        <p class="text-black font-semibold tracking-wide text-lg">anh canh2</p>
                    </div>
                    <div>
                        <div>90$</div>
                        <div>Nop tien</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div>
                <h1>Profile Information</h1>
            </div>
            <div>
                <div>
                    <form action="">
                        <div>
                            <div>
                                <label for="">First Name</label>
                                <input type="text">
                            </div>
                            <div>
                                <label for="">Last Name</label>
                                <input type="text">
                            </div>
                            <div>
                                <label for="">First Name</label>
                                <input type="text">
                            </div>
                            <div>
                                <label for="">First Name</label>
                                <input type="text">
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
