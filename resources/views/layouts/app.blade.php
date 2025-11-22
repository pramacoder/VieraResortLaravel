<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Viera Resort Ngurbloat')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if (!app()->environment('production') && !file_exists(public_path('build/manifest.json')))
        <style>
            /* Fallback styles jika Vite belum di-build */
            body { font-family: 'Instrument Sans', sans-serif; }
        </style>
        <script>
            console.warn('Vite manifest not found. Please run: npm run dev or npm run build');
        </script>
    @endif
</head>
<body class="antialiased bg-[#FDFBF7] text-[#1B1B18]">
    @yield('content')
</body>
</html>

