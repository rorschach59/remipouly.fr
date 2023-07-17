@extends('base')

@section('assets')
    @vite('resources/scss/services.scss')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endsection

@section('title', 'Design sur mesure | Développeur Web Freelance | Webmaster Indépendant')
@section('meta-desc', 'Développeur web freelance et webmaster indépendant spécialisé en développement web. Site responsive tous supports (mobile, tablette et ordinateur). Design sur mesure')

@section('content')

    <section id="banner" class="">
        <h1>Le design de votre site</h1>
    </section>

    <section id="content">
        <div class="px-4 mt-24 space-y-4 leading-7 md:w-2/3 md:mx-auto md:px-0">
            <p>Votre site Web n’est pas seulement une URL, c’est un élément essentiel de votre stratégie <a href="{{ route('seo-index')  }}" class="link">marketing et
                commerciale</a>. C’est une extension de votre marque et représente le premier contact avec votre future
                clientèle. Lorsque vous choisissez un développeur de site, vous avez besoin de quelqu’un en qui vous
                pouvez avoir confiance pour exécuter chaque aspect au plus haut niveau de qualité. Ne vous inquiétez pas
                : quelle que soit votre entreprise, votre produit ou vos clients, je créerais une expérience
                multiplateforme (mobile, tablette et ordinateur).</p>

            <h2 class="underline text-xl text-center font-bold !my-12">Site responsive tous supports</h2>

            <img src="{{ Vite::asset('resources/images/creation-site-internet-jfcaluminium.png') }}"
                 alt="Création du site internet pour l'entreprise JFC Aluminium"
                 class="mx-auto"
                 width="600" height="450"
            >

            <p>Aujourd’hui, plus de la moitié du trafic sur le web est réalisé via un smartphone ou une tablette.</p>

            <p>De ce fait, il faut que l’utilisateur ait la même expérience sur n’importe quel support. Mes solutions
                intègrent le « responsive design » qui permet d’adapter le contenu selon la taille de l’écran.</p>

            <h2 class="underline text-xl text-center font-bold !my-12">Un design sur mesure</h2>

            <p>Votre marque n’a pas encore de logo ? Ce n’est pas un problème, je peux facilement vous en créer un à votre image.
                <br>
                Le style est les images de votre site sont sélectionnés avec soin afin d’<a href="{{ route('development-index')  }}" class="link">optimiser le temps
                de chargement</a> de chaque page.</p>
        </div>

        <h2 class="bordered-title mt-24 mb-12">Pour résumer</h2>
        <div class="px-4 mb-24 space-y-4 leading-7 md:w-2/3 md:mx-auto md:px-0">
            <ul>
                <li>Optimisation du temps de chargement</li>
                <li>Design responsive (smartphone, tablette, ordinateur)</li>
                <li>Design sur mesure</li>
                <li>Identité de votre marque</li>
                <li>Intégration de vos réseaux sociaux</li>
                <li>Conception de votre logo sur demande</li>
            </ul>
        </div>
    </section>

@endsection
