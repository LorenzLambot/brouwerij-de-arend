<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- meta details -->
    <meta name="description" content="Brouwerij de Arend - Online verkoop van wijn en artisanale bieren! | brouwerij-de-arend.be">
    <meta name="author" content="brouwerij-de-arend.be">
    <meta name="keywords" content="Dranken, bieren, wijnen, likeuren & sterke dranken, frisdranken, water, koffie, koekjes, chips, varia">
    <meta property="og:title" content="Brouwerij de Arend - Online verkoop van wijn en artisanale bieren! | brouwerij-de-arend.be">
    <meta property="og:description" content="Brouwerij de Arend - Online verkoop van wijn en artisanale bieren!">
    <meta property="author" content="brouwerij-de-arend.be">
    <meta property="og:url" content="https://www.brouwerij-de-arend.be">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="brouwerij-de-arend.be">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'brouwerij-de-arend') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
</body>
</html>
