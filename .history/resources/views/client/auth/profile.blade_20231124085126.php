@extends('client.layouts.master')
@section('main')
    <div class="bg-[#ffff] grid grid-cols-4 px-32">
        <div class="col-span-1 bg-[#f6f2e6] w-full p-4">
            <div>
                <div>
                    <div>
                        <img src="{{ asset('images/avt.jpg') }}" alt="" class="w-full h-2 rounded-full">
                    </div>
                    <div>
                        <p>anh canh2</p>
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