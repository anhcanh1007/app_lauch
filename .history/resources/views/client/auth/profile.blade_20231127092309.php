@extends('client.layouts.master')
@section('main')
    <div class="bg-[#ffff] grid grid-cols-4 px-32 my-32 gap-5">
        <div class="col-span-1 bg-[#f6f2e6] w-full p-4 rounded-xl">
            <div>
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <img src="{{ asset('images/avt.jpg') }}" alt="" class="w-28 h-28 rounded-full" id="image_user">
                    </div>
                    <div class="mt-3">
                        <form action="{{ route('user.add_avatar', [$user->id]) }}" method="POST">
                            @csrf
                            <div>
                                <label for="fileInput"
                                    class="cursor-pointer flex items-center px-2 py-1 bg-blue-500 text-xs text-white rounded-md border border-blue-600 hover:bg-blue-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </label>
                            </div>
                            <div class="flex">
                                <div>
                                    <input id="fileInput" type="file" class="hidden" name="avatar" />
                                </div>
                                <div>
                                    <button type="submit"><i class="fas fa-check-circle"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-center mt-2">
                    <p class="text-black font-semibold tracking-wide text-lg">anh canh2</p>
                </div>
                <div class="flex justify-center text-[#333] font-semibold tracking-wide text-xl mt-2">
                    <div class="mr-2">90$</div>
                    <div><a href=""><i class="fas fa-wallet text-black"></i></a></div>
                </div>
            </div>
            <div class="mt-4 flex justify-center items-center flex-col">
                <div class="">
                    <form action="">
                        <button
                            class="p-3 bg-[#7d7072] text-sm font-medium tracking-wide rounded-2xl hover:bg-[#caf1fd] duration-150">Create
                            Your Referral
                            Code</button>
                    </form>
                </div>
                <div class="mt-2">
                    <p class="font-medium tracking-wide">Your Referral Code</p>
                    <div>
                        <input type="text" class="bg-[#8e9bb2] p-2 rounded-lg">
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
                    <form action="{{ route('user.update_profile', [$user->id]) }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-10">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">First Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="first_name" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Last Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="last_name" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
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
                                    <input type="text" name="phone" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Address</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="address" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-8">
                            <button type="submit"
                                class="bg-[#8e9bb2] px-10 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#d0b263] cursor-pointer duration-150 ">Update</button>
                        </div>
                        <div>
                            @if (session('success'))
                                <div>
                                    <p class="text-green-700 tracking-wide font-semibold">{{ $message }}</p>
                                </div>
                            @endif
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
                                class="bg-[#8e9bb2] px-10 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#d0b263] cursor-pointer duration-150">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
