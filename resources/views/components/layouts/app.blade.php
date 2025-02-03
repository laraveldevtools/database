<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel DevTools</title>
    
    @if(config('laraveldevtools.dev'))
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="http://localhost:5173/resources/js/app.js" type="module"></script>
    @else
        <link rel="stylesheet" href="{{ asset('vendor/laraveldevtools-database/build/laraveldevtools/app.css') }}">
        <script src="{{ asset('vendor/laraveldevtools-database/build/laraveldevtools/app.js') }}"></script>
    @endif
    @livewireStyles
</head>
<body>

    {{ $slot }}
    @livewireScripts
</body>
</html>