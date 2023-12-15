@extends('client.layouts.master')

@section('main')
    <div class="flex justify-center items-center bg-slate-300">
        <div class="w-1/2">
            <div>
                <button>WelCome To DIFI</button>
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
                            <p>Forgot Passwo</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
