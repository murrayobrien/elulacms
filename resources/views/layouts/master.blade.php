<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            Elula CMS
        @endif
    </title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/elulacms/assets/css/app.css') }}">
    @stack('css')
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    {{-- js scripts --}}
    <script src="{{ asset('vendor/elulacms/assets/js/app.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <example-component></example-component>
    </div>

    @yield('content')
    {{-- @include('layouts.footer') --}}
    @stack('scripts')
    {{-- @yield('javascript') --}}
</body>

</html>
