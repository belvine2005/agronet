<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])

    @fluxAppearance
    @livewireStyles
</head>

<body class="min-h-screen bg-gradient-to-br from-stone-200 via-stone-100 to-zinc-200 dark:bg-zinc-900 antialiased">

    <div class="flex min-h-screen flex-col items-center justify-center p-6">
        <a href="{{ route('home') }}" class="mb-6">
            <flux:heading size="xl">AgroNet</flux:heading>
        </a>

        <div class="w-full max-w-md">
            @yield('content')
        </div> 
    </div>


    @livewireScripts
    @fluxScripts
</body>

</html>
