<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POULY Rémi - @yield('title')</title>
    <meta name="description" content="@yield('meta-desc')">

    <link rel="apple-touch-icon" sizes="60x60" href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ Vite::asset('resources/images/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ Vite::asset('resources/images/safari-pinned-tab.svg') }}" color="#5bbad5">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @yield('assets')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YWTK8FW8P9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YWTK8FW8P9');
    </script>

</head>
<body>

    @include('layout/header')

    @yield('content')

    @include('layout/footer')

</body>
</html>
