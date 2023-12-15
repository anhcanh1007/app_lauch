<div class="bg-[#283046] text-[#c7c9ce] text-xl tracking-wide px-6 py-3 flex justify-between rounded-xl" id="id_header">
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
            @if (auth()->user())
                <h2>{{ auth()->user()->name }}</h2>
            @endif
            <img src="{{ asset('images/coin1.png') }}" alt="" class="w-12 h-12">
        </div>
    </div>
</div>
<div class="bg-[#ffffff] w-32 rounded-xl mt-[-10px] h-auto px-10 py-3 relative ml-[90%] text-lg tracking-wide">
    <div class="mb-2">
        <h1>Profile</h1>
    </div>
    <div>
        <h1>Logout</h1>
    </div>
</div>
<script>
    // Đoạn mã JavaScript của bạn ở đây
    // Ví dụ: Thêm một sự kiện click cho icon bell
    document.querySelector('#id_header').addEventListener('click', function() {
        alert('Icon bell đã được click!');
    });
</script>
