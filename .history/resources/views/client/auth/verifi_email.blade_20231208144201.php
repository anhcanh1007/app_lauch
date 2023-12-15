@extends('client.layouts.master')
@section('main')
    <div class="w-full py-40 bg-[#a19c9f] flex justify-center items-center">
        <div class="bg-[#f1ffff] rounded-xl">
            <div class="bg-[#0976b1] px-10 py-6 rounded-lg">
                <h1 class="text-white tracking-wide text-xl font-semibold">Please enter the code sent to your email!</h1>
            </div>
            <form action="{{ route('create_user') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $user['email'] }}" name="email">
                <input type="hidden" value="{{ $user['username'] }}" name="username">
                <input type="hidden" value="{{ $user['password'] }}" name="password">
                <input type="hidden" value="{{ $user['number'] }}" name="number">
                <input type="hidden" value="{{ $user['referral_id'] }}" name="referral_id">
                <input type="hidden" name="email_verification" value="1">
                <div class="px-10 my-6 w-full grid grid-cols-3 gap-6">
                    <div class="col-span-2">
                        <input type="text" name="number_verifi"
                            class="bg-[#0976b1] text-white w-full text-lg rounded-lg p-2">
                    </div>
                    <div class="col-span-1">
                        <button type="submit"
                            class="bg-[#0976b1] text-lg p-2 rounded-md text-white tracking-wide font-semibold">Submit</button>
                    </div>
                </div>
                @if ($message)
                    <div>
                        <p class="text-red-600 tracking-wide font-semibold">{{ $message }}</p>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
