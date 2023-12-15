@extends('backend.layouts.master')
@section('main')
    <div class="bg-[#283046] rounded-lg mt-10">
        <div class="p-4">
            <table class="w-full border-collapse">
                <thead class="bg-[#343d55] text-white tracking-wide">
                    <td class="p-3 border border-gray-400">TÊN</td>
                    <td class="p-3 border border-gray-200">EMAIL</td>
                    <td class="p-3 border border-gray-200">SỐ DƯ CHÍNH</td>
                    <td class="p-3 border border-gray-200">VÍ LÃI</td>
                    <td class="p-3 border border-gray-200">ĐĂNG NHẬP</td>
                    <td class="p-3 border border-gray-200">TRẠNG THÁI</td>
                </thead>
                @foreach ($users as $user)
                    <tbody class="bg-[#242b3d]">
                        <td class="p-3 border border-gray-200 text-[#7166ec]">{{ $user->username }}</td>
                        <td class="p-3 border border-gray-200 text-[#caccd1]">{{ $user->email }}</td>
                        <td class="p-3 border border-gray-200">{{ $user->balance }}</td>
                        <td class="p-3 border border-gray-200">{{ $user->interest_balance }}</td>
                        <td class="p-3 border border-gray-200">asdfasdf</td>
                        <td class="p-3 border border-gray-200">{{ $user->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}
                        </td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
