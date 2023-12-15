@extends('client.layouts.master')

@section('main')
    <div class="bg-[#f7f8f8] w-full px-32">
        <div class="pt-20 flex justify-between items-center">
            <button class="bg-[#6ba8d7] px-4 py-2 text-xl rounded-xl tracking-wide font-medium">Get unlimited
                Rewards</button>
        </div>
        <div class="flex justify-between items-center mt-5">
            <h1 class="text-xl tracking-wide font-medium">Bounty Program</h1>
        </div>
        <div class="mt-5 flex justify-start">
            <div class="mr-3"><button class="bg-[#]">Youtube</button></div>
            <div class="mr-3"><button>Trustpilot</button></div>
            <div class="mr-3"><button>Google</button></div>
            <div class="mr-3"><button>GG Map</button></div>
        </div>
        <div>
            <div>
                <div>
                    <h1>Bonus from $10 - $80</h1>
                </div>
                <div>
                    <p>Requirements: meet bonus conditions. The amount of the reward depends on the content of your account,
                        the number of friends and the quality of the videos and texts in it.</p>
                </div>
                <div>
                    <button>Start Video</button>
                </div>
            </div>
            <div>
                <div>
                    <h2>Working conditions</h2>
                </div>
                <div>
                    <li>You must follow us on Facebook, YouTube, Telegram.</li>
                </div>
                <div>
                    <li>Video is not copied from another channel</li>
                </div>
            </div>
            <div>
                <div>
                    <h2>Participation rules</h2>
                </div>
                <div>
                    <li>Video reached over 1k views</li>
                </div>
                <div>
                    <li>The length of the video must be at least 30 seconds.</li>
                </div>
            </div>
        </div>
    </div>
@endsection
