<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('../resources/css/tailwindcss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../resources/css/app.css') }}">
    <!-- Bootstrap CSS link -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <!-- Bootstrap JavaScript link -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}

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
        <div class="footer max-w-7xl mx-auto p-6 lg:p-8" style="position: inherit;">
            @include('layouts/footer')
        </div>
    </div>
</body>

</html>
