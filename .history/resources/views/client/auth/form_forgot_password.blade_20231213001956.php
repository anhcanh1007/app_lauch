@extends('client.layouts.master')

@section('main')
    <div class="my-20 p-10 flex justify-center">
        <div class="w-[33%] shadow-lg p-10">
            <div>


            <div class="flex justify-center">
                <h1 class="text-xl tracking-wide font-semibold">Please enter your email!</h1>
            </div>
            <div>
                <form action="">
                    <input type="text" name="email" placeholder="exapmle@gamil.com">
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
