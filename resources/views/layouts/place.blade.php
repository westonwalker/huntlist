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

        .text-shadow {
            text-shadow: 1px 1px 0 rgb(0 0 0 / 35%), 1px 1px 5px rgb(0 0 0 / 50%);
        }
    </style>
    @production
    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="KWEZYFTZ" defer></script>
    <!-- / Fathom -->
    @endproduction
</head>

<body>
    <div class="min-h-screen bg-gray-800">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
