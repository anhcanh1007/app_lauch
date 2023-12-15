@extends('client.layouts.master')
@section('main')
    <div class="bg-[#ffff] grid grid-cols-4 px-32 my-32 gap-5">
        <div class="col-span-1 bg-[#f6f2e6] w-full p-4 rounded-xl">
            <div>
                <div class="flex flex-col">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/avt.jpg') }}" alt="" class="w-20 h-20 rounded-full" id="image_user">
                    </div>
                    <div class="mt-3">
                        <form action="{{ route('user.add_avatar', [$user->id]) }}" method="POST">
                            <div class="flex justify-center">
                                @csrf
                                <div class="mr-2">
                                    <label for="fileInput"
                                        class="cursor-pointer flex items-center px-2 py-1 bg-blue-500 text-xs text-white rounded-md border border-blue-600 hover:bg-blue-600">
                                        <i class="fas fa-image"></i>
                                    </label>
                                </div>
                                <div class="">
                                    <div>
                                        <input id="fileInput" type="file" class="hidden" name="avatar" />
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="cursor-pointer flex items-center px-2 py-1 bg-blue-500 text-xs text-white rounded-md border border-blue-600 hover:bg-blue-600"><i
                                                class="fas fa-check-circle"></i></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="flex justify-center mt-2">
                    <p class="text-black font-semibold tracking-wide text-lg">anh canh2</p>
                </div>
                <div class="flex justify-center text-[#333] font-semibold tracking-wide text-xl mt-2">
                    <div class="mr-2">{{ $user->balance }} <i class="fas fa-dollar-sign"></i></div>
                    <div><a href=""><i class="fas fa-wallet text-black"></i></a></div>
                </div>
            </div>
            <div class="mt-4 flex justify-center items-center flex-col">
                <div class="">
                    <form action="{{ route('user.create_referral', [$user->id]) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="p-3 text-sm font-medium tracking-wide rounded-2xl hover:bg-[#a19c9f] duration-150">Create
                            Your Referral
                            Code</button>
                    </form>
                </div>
                <div class="mt-2">
                    <p class="font-medium tracking-wide">Your Referral Code</p>
                    <div>
                        <input type="text" value="{{ $user->refcode }}" class="bg-[#8e9bb2] p-2 rounded-lg">
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
                                    <input type="text" name="first_name" class="w-full bg-[#8e9bb2] p-2 rounded-xl"
                                        value="{{ $user->firstname }}">
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Last Name</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="last_name" class="w-full bg-[#8e9bb2] p-2 rounded-xl"
                                        value="{{ $user->lastname }}">
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
                                    <input type="text" name="phone" class="w-full bg-[#8e9bb2] p-2 rounded-xl"
                                        value="{{ $user->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Address</label>
                                </div>
                                <div class="w-full">
                                    <input type="text" name="address" class="w-full bg-[#8e9bb2] p-2 rounded-xl"
                                        value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-8">
                            <button type="submit"
                                class="bg-[#8e9bb2] px-10 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#d0b263] cursor-pointer duration-150 ">Update</button>
                        </div>
                        @if (session('success'))
                            <div class="p-2 border-neutral-600 bg-green-600 rounded-xl text-center mt-4">
                                <p class="text-white tracking-wide font-semibold">{{ session('success') }}</p>
                            </div>
                        @endif
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
                    <form action="{{ route('user.update_password', [$user->id]) }}" method="POST">
                        @csrf
                        <div class="grid gap-2">
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">New Password</label>
                                </div>
                                <div class="w-full">
                                    <input type="password" name="password" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                            <div class="mb-2 col-span-1">
                                <div class="mb-1">
                                    <label for="">Confirm New Password</label>
                                </div>
                                <div class="w-full">
                                    <input type="password" name="c_password" class="w-full bg-[#8e9bb2] p-2 rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4">
                            <button type="submit"
                                class="bg-[#8e9bb2] px-10 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#d0b263] cursor-pointer duration-150">Update</button>
                        </div>
                        @if (session('success_password'))
                            <div class="p-2 border-neutral-600 bg-green-600 rounded-xl text-center mt-4">
                                <p class="text-white tracking-wide font-semibold">{{ session('success_password') }}</p>
                            </div>
                        @endif
                        @if (session('errors'))
                            <div class="p-2 border-neutral-600 bg-red-600 rounded-xl text-center mt-4">
                                <p class="text-white tracking-wide font-semibold">{{ session('errors') }}</p>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
