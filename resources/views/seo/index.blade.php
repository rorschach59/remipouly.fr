@extends('base')

@section('assets')
    @vite('resources/scss/services.scss')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endsection

@section('title', 'Référencement SEO | Développeur Web Freelance | Webmaster Indépendant')
@section('meta-desc', 'Développeur web freelance et webmaster indépendant spécialisé en développement web. Site responsive tous supports (mobile, tablette et ordinateur). Référencement SEO')

@section('content')

    <section id="banner" class="">
        <h1>Le référencement de votre site</h1>
    </section>

    <section id="content">

        <h2 class="mt-24 underline text-xl text-center font-bold !my-12">Référencement naturel</h2>

        <div class="px-4 space-y-4 leading-7 md:w-2/3 md:mx-auto md:px-0">
            <p>Cette étape est bien trop souvent négligée, et pourtant elle est capitale si vous souhaitez être visible dans les moteurs de recherche</p>

            <p>Le référencement naturel correspond aux techniques mises en place pour améliorer son positionnement dans les résultats de recherche de Google, BIng ou Yahoo par rapport à un mot-clé ou une requête de plusieurs mots-clés. C’est ce positionnement qui apporte du trafic sur votre site internet et qui améliorera potentiellement votre chiffre d’affaires. D’où l’importance de bien travailler son référencement naturel, pour tous les types de business !</p>

            <p>Dans un monde où tout le monde peut <a href="{{ route('development-index')  }}" class="link">créer son site internet</a> et être présent sur les moteurs de recherche, la place de son site web dans les résultats de Google compte énormément pour attirer du trafic et des clients. L’optimiser demande un savoir-faire que je mettrais à votre disposition afin de vous garantir une meilleure visibilité sur internet et dans les moteurs de recherche.</p>


            <h2 class="underline text-xl text-center font-bold !my-12">Analyse de nos progrès</h2>

            <img src="{{ Vite::asset('resources/images/analyse-de-nos-progres.jpg') }}"
                 alt="Analyse de nos progres - Référencement de sites internet"
                 class="mx-auto my-24"
                 width="800" height="421"
            >

            <p class="!mt-12">Des outils me permettront d’analyser le trafic de votre site internet afin de mieux connaitre le comportement de chaque visiteur de votre site internet.</p class="mt-12">

            <p>Cette analyse me donnera la marche à suivre pour améliorer les mots-clefs de votre référencement naturel.</p>
        </div>

        <h2 class="bordered-title mt-24 mb-12">Pour résumer</h2>
        <div class="px-4 mb-24 space-y-4 leading-7 md:w-2/3 md:mx-auto md:px-0">
            <ul>
                <li>Référencement naturel sur Google, Bing & Yahoo</li>
                <li>Indexation automatique des pages</li>
                <li>Optimisation des pages avec les mots-clés</li>
                <li>Conversion des visiteurs en clients</li>
                <li>Augmentation du nombre de visiteurs</li>
                <li>Augmentation de votre chiffre d’affaires</li>
                <li>Rapport des visiteurs sur votre site</li>
            </ul>
        </div>
    </section>

@endsection
