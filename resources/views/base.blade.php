<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POULY Rémi - @yield('title')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @yield('assets')

</head>
<body>

    @include('layout/header')

    @yield('content')

    @include('layout/footer')

</body>
</html>
