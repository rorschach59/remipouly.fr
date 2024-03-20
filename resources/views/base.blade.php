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

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//test-matomo.remipouly.fr/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
    
    <!-- Matomo Tag Manager -->
<script>
  var _mtm = window._mtm = window._mtm || [];
  _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
  (function() {
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src='https://test-matomo.remipouly.fr/js/container_uBUS5cC7.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Tag Manager -->
    
</head>
<body>

    @include('layout/header')

    @yield('content')

    @include('layout/footer')

</body>
</html>
