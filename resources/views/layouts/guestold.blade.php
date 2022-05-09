<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="icon" href="{{ asset('assets/img/vedicon.png') }}">

        <!-- Scripts -->
        <script src="{{ ('js/app.js') }}" defer></script>
        <script src="{{ asset('assets/js/mdb.min.js') }}" ></script>
    </head>
    <body style="background-image:url({{ asset('assets/img/slashbg.png') }});background-size:100% 100%;background-attachment:fixed;">
    		@include('../partials/navbar')
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
