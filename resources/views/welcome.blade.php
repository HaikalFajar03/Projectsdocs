<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProjectDocs</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container mx-auto w-full h-lvh bg-gray-100">
    <div class="flex justify-center items-center h-full">
        @if (Route::has('login'))
        <div class="text-center p-6 bg-white shadow-xl rounded-lg border border-gray-200">
            <h1 class="text-3xl font-bold pb-4">Welcome to ProjectDocs</h1>
            <div class="w-full text-white py-2 bg-slate-900 hover:bg-slate-700 cursor-pointer rounded-full">
                <a href="{{ route('login') }}" class="block w-full">Login</a>
            </div>
            <p class="text-lg py-2 font-medium">
                or
            </p>
            @if (Route::has('register'))
            <div class="w-full text-slate-950 py-2 bg-slate-300 hover:bg-slate-400 cursor-pointer rounded-full">
                <a href="{{ route('register') }}" class="block w-full">Register</a>
            </div>
            @endif
        </div>
        @endif
    </div>
</body>

</html>
