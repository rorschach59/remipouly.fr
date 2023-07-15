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

    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:site_name"
          content="Rémi POULY - Développeur web freelance et webmaster indépendant spécialisé en développement web. Contactez-moi pour un site web de qualité ou un développement spécifique"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Contactez-moi pour un devis gratuit - Rémi POULY | Développeur web freelance"/>
    <meta property="og:description"
          content="Contactez-moi pour votre projet web et obtenir un devis gratuit. Développeur web freelance et webmaster indépendant spécialisé en développement web"/>
    <meta property="og:url" content="https://remipouly.fr/contact/"/>
    <meta property="og:image" content="https://www.remipouly.fr/build/assets/logo-pouly-remi-developpeur-freelance-eb82efc8.png"/>
    <meta property="og:image:secure_url" content="https://www.remipouly.fr/build/assets/logo-pouly-remi-developpeur-freelance-eb82efc8.png"/>
    <meta property="og:image:width" content="150"/>
    <meta property="og:image:height" content="150"/>
    <meta property="article:published_time" content="2023-06-24T06:04:22+00:00"/>
    <meta property="article:modified_time" content="2023-06-24T06:04:22+00:00"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Contactez-moi pour un devis gratuit - Rémi POULY | Développeur web freelance"/>
    <meta name="twitter:description"
          content="Contactez-moi pour votre projet web et obtenir un devis gratuit. Développeur web freelance et webmaster indépendant spécialisé en développement web"/>
    <meta name="twitter:image" content="https://www.remipouly.fr/build/assets/logo-pouly-remi-developpeur-freelance-eb82efc8.png"/>

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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KMSMVBV');</script>
    <!-- End Google Tag Manager -->

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMSMVBV"
                height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('layout/header')

    @yield('content')

    @include('layout/footer')

</body>
</html>
