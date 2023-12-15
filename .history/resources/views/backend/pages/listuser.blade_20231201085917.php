@extends('backend.layouts.master')
@section('main')
    <div class="bg-[#283046] rounded-lg mt-10">
        <div class="p-4">
            <table class="w-full border-collapse">
                <thead class="bg-[#343d55] text-white tracking-wide">
                    <td class="p-3 border border-slate-300">TÊN</td>
                    <td class="p-3 border border-slate-300">EMAIL</td>
                    <td class="p-3 border border-slate-300">SỐ DƯ CHÍNH</td>
                    <td class="p-3 border border-slate-300">VÍ LÃI</td>
                    <td class="p-3 border border-slate-300">ĐĂNG NHẬP</td>
                    <td class="p-3 border border-slate-300">TRẠNG THÁI</td>
                </thead>
                @foreach ($users as $user)
                    <tbody class="bg-[#242b3d]">
                        <td >{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->balance }}</td>
                        <td>{{ $user->interest_balance }}</td>
                        <td>asdfasdf</td>
                        <td>{{ $user->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
