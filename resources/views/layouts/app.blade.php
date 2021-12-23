<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Huntlist') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon-yellow.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
            <div class="max-w-7xl py-4 mx-auto px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
