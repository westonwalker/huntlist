<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Huntlist') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <style>
        .emoji {
            font-weight: initial !important;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body>
    <div class="min-h-screen bg-gray-800">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script> --}}
</body>

</html>
