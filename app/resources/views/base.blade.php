<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/icone-180x180.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ Vite::asset('resources/images/icone-60x60.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ Vite::asset('resources/images/icone-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/images/icone-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="20x20" href="{{ Vite::asset('resources/images/icone-16x16.png') }}">

    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:site_name"
          content="Evaluation Fonds de Commerce | Utilisez notre outil pour géolocaliser les cessions de fonds de commerce et obtenir les ratios d'évaluation les plus récents basés sur des données fiables."/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Evaluation Fonds de Commerce"/>
    <meta property="og:description"
          content="Utilisez notre outil pour géolocaliser les cessions de fonds de commerce et obtenir les ratios d'évaluation les plus récents basés sur des données fiables."/>
    <meta property="og:url" content="https://evaluation-fonds-de-commerce.fr/contactez-nous"/>
    <meta property="og:image" content="https://evaluation-fonds-de-commerce.fr/build/assets/logo-site-DTAgNkRs.png"/>
    <meta property="og:image:secure_url" content="https://evaluation-fonds-de-commerce.fr/build/assets/logo-site-DTAgNkRs.png"/>
    <meta property="og:image:width" content="150"/>
    <meta property="og:image:height" content="150"/>
    <meta property="article:published_time" content="2023-06-24T06:04:22+00:00"/>
    <meta property="article:modified_time" content="2023-06-24T06:04:22+00:00"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Evaluation Fonds de Commerce"/>
    <meta name="twitter:description"
          content="Evaluation Fonds de Commerce | Utilisez notre outil pour géolocaliser les cessions de fonds de commerce et obtenir les ratios d'évaluation les plus récents basés sur des données fiables."/>
    <meta name="twitter:image" content="https://evaluation-fonds-de-commerce.fr/build/assets/logo-site-DTAgNkRs.png"/>

    <title>@yield('title') - Evaluation fonds de commerce</title>
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
