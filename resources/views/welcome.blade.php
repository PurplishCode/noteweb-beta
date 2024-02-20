<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif
        <div class="flex flex-col p-6 mx-auto max-w-7xl lg:p-8 align-center ">
            <x-application-logo class="flex w-20 h-20" />
            <div class="flex flex-col pt-4 space-x-4 ">
                <x-button primary lg href="{{ route('register') }}">GET STARTED</x-button>
            </div>
        </div>
            
    </div>
</body>

</html>