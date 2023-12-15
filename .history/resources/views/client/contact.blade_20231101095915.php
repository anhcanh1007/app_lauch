@extends('client.layouts.master')

@section('main')
    <div class="w-full px-32">
        <div class="mt-20 flex justify-center items-center">
            <button class="bg-[#1687FA] px-4 py-3 rounded-xl text-white font-medium text-xl tracking-wide">Contact
                Us</button>
        </div>
        <div class="text-center mt-10">
            <h1 class="text-2xl text-black tracking-wide font-semibold">Our Contact Address Here.</h1>
        </div>
        <div class="mt-14 flex justify-around">
            <div class="bg-[#1F1507] text-white rounded-xl px-10 py-10 grid grid-rows-3 gap-4 w-[30%]">
                <div><i class="fas fa-headphones text-4xl text-blue-600"></i></div>
                <div>
                    <h2 class="text-2xl font-medium">Contact Phone Number</h2>
                </div>
                <div>
                    <p class="tracking-wide text-xl">+64 20 8597 8781</p>
                </div>
            </div>
            <div class="bg-[#1F1507] text-white rounded-xl px-10 py-10 grid grid-rows-3 gap-4 w-[30%]">
                <div><i class="fas fa-envelope text-4xl text-blue-600"></i></div>
                <div>
                    <h2 class="text-2xl font-medium">Our Email Address</h2>
                </div>
                <div>
                    <p class="tracking-wide text-xl">info@tradex10.com</p>
                </div>
            </div>
            <div class="bg-[#1F1507] text-white rounded-xl px-10 py-10 grid grid-rows-3 gap-4 w-[30%]">
                <div><i class="fas fa-map-marker-alt text-4xl text-blue-600"></i></div>
                <div>
                    <h2 class="text-2xl font-medium">Our Location</h2>
                </div>
                <div>
                    <p class="tracking-wide text-xl">14 Uretara Drive,
                        Katikati 3129, New Zealand</p>
                </div>
            </div>
        </div>
        <div class="mt-20">
            <form action="" class="flex justify-center items-center flex-col">
                <div class="w-3/4">
                    <input type="text" placeholder="Your Name"
                        class="w-full border border-gray-800 px-3 py-2 text-xl text-black tracking-wide font-medium rounded-xl hover:border-b-500">
                </div>
                <div>
                    <input type="text" placeholder="Phone Number">
                </div>
                <div>
                    <input type="text" placeholder="Your Email">
                </div>
                <div>
                    <input type="text" placeholder="Your Subject">
                </div>
                <div>
                    <textarea name="" placeholder="
                    Your Message" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button>Submit Now</button>
                </div>
            </form>
        </div>
    </div>
@endsection
