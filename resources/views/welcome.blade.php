<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialias">
    <div
        class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif
        <div class="flex flex-col w-15 p-6 px-4 mx-auto border max-w-7xl lg:p-8 align-center bg-gray-900">
            <x-application-logo class="flex w-20 h-20 mx-auto" />
            <div class="pt-4 space-x-4 ">
                <button primary xl href="{{ route('register') }}"
                    class="flex flex-col px-6 py-3 mx-auto bg-purple-700 border rounded-lg hover:bg-purple-400 dark:text-white dark:bg-purple-600"><a
                        href="{{ route('register') }}" class="uppercase text-white" style="font-family: Arial, Helvetica, sans-serif">get started</a></button>
                        
            </div>
            <div class="flex flex-col py-4 mx-auto text-white"><h6>"Forward your thoughts online!"</h6></div>
        </div>

    </div>
</body>

</html>