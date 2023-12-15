@extends('backend.layouts.master')
@section('main')
    <div class="bg-[#283046] rounded-lg mt-10">
        <div class="p-4">
            <table class="w-full border-collapse">
                <thead class="bg-[#343d55] text-white tracking-wide">
                    <td class="p-3 border border-gray-500">TÊN</td>
                    <td class="p-3 border border-gray-500">EMAIL</td>
                    <td class="p-3 border border-gray-500">SỐ DƯ CHÍNH</td>
                    <td class="p-3 border border-gray-500">VÍ LÃI</td>
                    <td class="p-3 border border-gray-500">ĐĂNG NHẬP</td>
                    <td class="p-3 border border-gray-500">TRẠNG THÁI</td>
                </thead>
                @foreach ($users as $user)
                    <tbody class="bg-[#242b3d]">
                        <td class="p-3 border border-gray-500 text-[#7166ec]">{{ $user->username }}</td>
                        <td class="p-3 border border-gray-500 text-[#caccd1]">{{ $user->email }}</td>
                        <td class="p-3 border border-gray-500 text-[#caccd1]">${{ $user->balance }}</td>
                        <td class="p-3 border border-gray-500 text-[#caccd1]">${{ $user->interest_balance }}</td>
                        <td class="p-3 border border-gray-500 text-[#caccd1]">{{ $user->last_login }}</td>
                        <td class="p-3 border border-gray-500">
                            <p class="text-green-500 fo bg-green-900 py-1 px-4 rounded-md">
                                {{ $user->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</p>
                        </td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
