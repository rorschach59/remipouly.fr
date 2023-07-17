@extends('base')

@section('assets')
    @vite('resources/scss/services.scss')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endsection

@section('title', 'Développement sur mesure | Développeur Web Freelance | Webmaster Indépendant')
@section('meta-desc', 'Développeur web freelance et webmaster indépendant spécialisé en développement web. Site responsive tous supports (mobile, tablette et ordinateur). Développement sur mesure')

@section('content')

    <section id="banner" class="">
        <h1>Le développement de votre site</h1>
    </section>

    <section id="content">
        <img src="{{ Vite::asset('resources/images/lignes-de-code-php.jpg') }}"
             alt="Lignes de code en PHP - Développement de sites internet"
             class="mx-auto my-24"
             width="800" height="421"
        >
        <div class="px-4 space-y-4 leading-7 md:w-2/3 md:mx-auto md:px-0">
            <p>Je concevrais votre site vitrine, e-commerce ou portfolio en fonction des contenus / images / données que
                vous m’avez transférés. Je développerais en utilisant les standards du web définis par le W3C (World
                Wide Web Consortium).</p>

            <p>L’arborescence du site est primordiale pour hiérarchiser vos contenus et les articuler de manière
                logique. Elle est aussi bénéfique au <a href="{{ route('seo-index')  }}" class="link">référencement naturel (SEO)</a> de votre site.</p>

            <p>Un site internet est votre identité sur le web. Il est là pour présenter votre entreprise : ce que vous
                faites, votre politique et vos engagements, où vous vous situez, … Le site internet facilite le contact,
                en plus des réseaux sociaux que vous pouvez disposer dessus ou encore le formulaire de contact. Le tout
                dans le but d’accroître votre rayonnement. Il convient donc de le personnaliser au mieux selon vos
                attentes et votre profil. Un beau <a href="{{ route('design-index')  }}" class="link">design</a> marque les esprits et donne confiance à l’utilisateur.</p>


            <h2 class="underline text-xl text-center font-bold !my-12">Nom de domaine & hébergement</h2>

            <p>Je peux, si vous le souhaitez, m’occuper de la réservation d’un nom de domaine et du choix d’un
                hébergement de qualité.</p>
        </div>

        <h2 class="bordered-title mt-24 mb-12">Pour résumer</h2>
        <div class="px-4 mb-24 space-y-4 leading-7 md:w-2/3 md:mx-auto md:px-0">
            <ul>
                <li>Conception ou refonte de votre site internet</li>
                <li>Site vitrine, portfolio, e-commerce</li>
                <li>Indexation par Google, Bing & Yahoo</li>
                <li>Mise en place de HTTPS (site sécurisé)</li>
                <li>Respect des standards du web</li>
                <li>Choix du nom de domaine & hébergement</li>
            </ul>
        </div>
    </section>

@endsection
