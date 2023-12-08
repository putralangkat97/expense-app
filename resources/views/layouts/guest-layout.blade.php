<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ request()->is('register') ? 'Register' : 'Login' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-white dark:bg-gray-900 antialiased">
    <div class="h-screen mx-auto flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 w-full max-w-sm rounded-lg shadow p-4">
            <h1 class="text-center text-2xl text-gray-800 dark:text-white mb-4">
                {{ request()->is('register') ? 'Register' : 'Login' }}</h1>
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

</html>
