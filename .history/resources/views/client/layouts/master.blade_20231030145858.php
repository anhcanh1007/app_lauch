<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>DIFI APP</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="icon" href="{{ asset('images/logo.jpg') }}">

</head>

<body class="antialiased">
    <div>
        <div class="">
            @include('client.layouts.nav')
        </div>
        <div class="pt-96">
            @yield('main')
        </div>
        <div>
            @include('client.layouts.footer')
        </div>
    </div>
</body>

</html>
