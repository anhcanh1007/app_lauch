<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>DIFI | Bảng chính</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Styles -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap">


</head>

<body class="antialiased">
    <div class="h-screen w-full bg-cover pt-52 pl-36"
        style="background-image: url({{ asset('images/bg-login-admin.jpg') }})">
        <div class="p-10 w-1/3 h-auto bg-[#362e30] opacity-60 rounded-xl">
            <div class="flex justify-center mb-5">
                <h1 class="text-2xl tracking-wide font-semibold text-white">Admin Login</h1>
            </div>
            <form action="">
                <div>
                    <div>
                        <label for="" class="text-white tracking-wide font-medium text-lg">Email</label>
                    </div>
                    <div>
                        <input type="text">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Password</label>
                    </div>
                    <div>
                        <input type="password">
                    </div>
                </div>
                <div>
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
