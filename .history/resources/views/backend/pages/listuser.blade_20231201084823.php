@extends('backend.layouts.master')
@section('main')
    <div class="bg-[#283046] rounded-lg mt-10">
        <div class="p-4">
            <table class="w-full">
                <thead class="bg-[#343d55] text-white tracking-wide">
                    <td class="p-3">TÊN</td>
                    <td>EMAIL</td>
                    <td>SỐ DƯ CHÍNH</td>
                    <td>VÍ LÃI</td>
                    <td>ĐĂNG NHẬP</td>
                    <td>TRẠNG THÁI</td>
                </thead>
                @foreach ($user as )

                @endforeach
                <tbody>
                    <td class="p-3"></td>
                    <td>asdfasfasasfasfasfsafasdfa</td>
                    <td>dsf</td>
                    <td>sdf</td>
                    <td>asdfasdf</td>
                    <td>asdfadfafa</td>
                </tbody>
            </table>
        </div>
    </div>
@endsection
