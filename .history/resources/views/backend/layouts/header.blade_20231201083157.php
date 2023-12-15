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
            @if (auth()->user())
                <h2>{{ auth()->user()->name }}</h2>
            @endif
            <img src="{{ asset('images/coin1.png') }}" alt="" class="w-12 h-12" id="id_header">
        </div>
    </div>
</div>
<div class="bg-[#ffffff] w-32 rounded-xl mt-[-10px] h-auto px-10 py-3 relative ml-[90%] text-lg tracking-wide"
    style="display: none" id="logout_admin">
    <div class="mb-1">
        <h1>Profile</h1>
    </div>
    <div>
        <h1>Logout</h1>
    </div>
</div>
<script>
    // Lắng nghe sự kiện click trên toàn bộ trang
    document.addEventListener('click', function(event) {
        var header = document.querySelector('#id_header');
        var logoutAdmin = document.querySelector('#logout_admin');

        // Kiểm tra xem phần tử được click có phải là #id_header hay không
        var isHeaderClicked = header.contains(event.target);

        // Nếu không phải #id_header, ẩn #logout_admin
        if (!isHeaderClicked) {
            logoutAdmin.style.display = 'none';
        }
    });

    // Lắng nghe sự kiện click trên #id_header để hiển thị #logout_admin
    document.querySelector('#id_header').addEventListener('click', function(event) {
        // Ngăn chặn sự kiện click từ việc lan truyền lên trên cấp
        event.stopPropagation();

        document.querySelector('#logout_admin').style.display = 'block';
        document.querySelector('#logout_admin').style.tra = 'block';
    });
</script>
