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
        <div class="p-20 w-1/3 h-auto bg-[#362e30] opacity-60 rounded-xl">
            <div class="flex justify-center mb-5">
                <h1 class="text-2xl tracking-wide font-semibold text-white">Admin Login</h1>
            </div>
            <form action="">
                <div class="mb-3">
                    <div>
                        <label for="" class="text-white tracking-wide font-medium text-lg">Email</label>
                    </div>
                    <div>
                        <input type="text" name="email"
                            class="w-full rounded-lg text-lg px-2 hover:border border-blue-500">
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <label for="" class="text-white tracking-wide font-medium text-lg">Password</label>
                    </div>
                    <div>
                        <input type="password" name="password"
                            class="w-full rounded-lg text-lg px-2 hover:border border-blue-500">
                    </div>
                </div>
                <div class="flex justify-center mt-6">
                    <button
                        class="text-xl bg-[#e9eef1] px-8 py-2 rounded-xl font-semibold tracking-wide hover:bg-[#6ba8d7] duration-200">Login</button>
                </div>
            </form>
        </div>
        <div>
            <form action="{{ route('ad') }}" method="POST"></form>
        </div>
    </div>
</body>

</html>
