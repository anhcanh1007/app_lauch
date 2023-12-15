<div class="bg-[#283046] text-[#c7c9ce] text-xl tracking-wide px-6 py-3 flex justify-between rounded-xl">
    <div class="flex justify-center items-center">
        <div class="mr-6">
            <i class="fas fa-level-up-alt"></i>
        </div>
        <div>
            <i class="fas fa-level-down-alt"></i>
        </div>
    </div>
    <div class="flex justify-center items-center">
        <div class="mr-4">
            <i class="far fa-bell"></i>
        </div>
        <div class="flex justify-center items-center">
            @if (auth()->user)

            @endif
            <h2>admin</h2>
            <img src="{{ asset('images/coin1.png') }}" alt="" class="w-12 h-12">
        </div>
    </div>
</div>
