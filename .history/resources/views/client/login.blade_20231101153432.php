@extends('client.layouts.master')

@section('main')
    <div class="flex justify-center items-center bg-slate-300 w-full bg-cover h-screen"
        style="background-image: url({{ asset('images/backlogin2.jpg') }})">
        <div class="w-1/2 bg-[#ffffff] px-5 py-4 rounded-xl">
            <div class="flex justify-center items-center">
                <h1 class="text-2xl tracking-wide f">WelCome To DIFI</h1>
            </div>
            <div>
                <h1>Login</h1>
            </div>
            <div>
                <form action="">
                    <div>
                        <p>Your email or username</p>
                        <input class="form-control" type="text" name="" placeholder="email / username">
                    </div>
                    <div>
                        <p>Your Password</p>
                        <input class="form-control" type="text" name="" placeholder="Password">
                    </div>
                    <div>
                        <div>
                            <input type="checkbox" name="" id=""><span>Remember me?</span>
                        </div>
                        <div>
                            <p>Forgot Password?</p>
                        </div>
                    </div>
                    <div>
                        <button>Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
