<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tailwindcss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    

</head>

<body class="antialiased">
    <div class="sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        {{-- NAVBAR --}}
        @include('layouts/navbar')
        <br>



        <div class="max-w-7xl mx-auto p-6 lg:p-8 mt-16">

            {{-- BODY --}}
            @yield('body')
        </div>



        {{-- FOOTER --}}
        <div class="footer max-w-7xl mx-auto p-6 lg:p-8">
            @include('layouts/footer')
        </div>
    </div>
</body>

</html>
