<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ Vite::asset('resources/images/web-app-manifest-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="20x20" href="{{ Vite::asset('resources/images/favicon-96x96.png') }}">

    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:site_name"
          content="Découvrez notre service de location d'articles de loisirs et événementiels : chaises, tables, barnums, karaokés, jeux, et plus. Parfait pour vos événements privés ou professionnels."/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Location d'articles de loisirs"/>
    <meta property="og:description"
          content="Utilisez notre outil pour géolocaliser les cessions de fonds de commerce et obtenir les ratios d'évaluation les plus récents basés sur des données fiables."/>
    <meta property="og:url" content="https://locationfete.fr/contactez-nous"/>
    <meta property="og:image" content="https://locationfete.fr/build/assets/logo-site-DTAgNkRs.png"/>
    <meta property="og:image:secure_url" content="https://locationfete.fr/build/assets/logo-site-DTAgNkRs.png"/>
    <meta property="og:image:width" content="150"/>
    <meta property="og:image:height" content="150"/>
    <meta property="article:published_time" content="2024-11-19T06:04:22+00:00"/>
    <meta property="article:modified_time" content="2024-11-19T06:04:22+00:00"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Location articles de loisirs"/>
    <meta name="twitter:description" content="Découvrez notre service de location d'articles de loisirs et événementiels : chaises, tables, barnums, karaokés, jeux, et plus. Parfait pour vos événements privés ou professionnels, avec une couverture régionale !">
    <meta name="twitter:image" content="https://locationfete.fr/build/assets/logo-site-DTAgNkRs.png"/>

    <title>@yield('title') - Béthune location fête</title>
    <meta name="description" content="@yield('meta-desc')">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @yield('assets')
</head>
<body>
@include('layouts/header')
@yield('content')
@include('layouts/footer')
</body>
</html>
