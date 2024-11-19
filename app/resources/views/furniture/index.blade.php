@extends('base')

@section('title', "Location de Mobilier Événementiel | Chaises, Tables et Barnums")
@section('meta-desc', "Découvrez notre gamme de mobilier en location : chaises, tables, et accessoires pour tous vos événements. Qualité et flexibilité pour une organisation sans stress, adaptée aux particuliers et professionnels.")

@section('assets')
@endsection

@section('content')

    <div id="header">
        <h1>Mobilier</h1>
        <div class="pb-20">
            <p>Tout ce dont vous avez besoin !</p>
            <hr>
        </div>
    </div>

    <div class="text-my-blue-600">
        <section class="md:grid md:grid-cols-2">
            <div>
                <img src="{{ Vite::asset('resources/images/table-a-louer.webp') }}"
                     alt="Table à louer"
                >
            </div>
            <div class="place-self-center md:px-32">
                <h2 class="pt-0 font-bold">Tables</h2>
                <p class="leading-7"><span class="underline">Tables pliantes rectangulaires :</span> Idéales pour installer des buffets, des ateliers créatifs ou des espaces de jeux de société. Elles
                    offrent un support stable et pratique pour toutes vos activités.</p>
                <p class="pt-6">5€ pièce</p>
                <div class="pt-10">
                    <a href="{{ route('contact.home') }}" class="primary-button">Nous contacter</a>
                </div>
            </div>

            <div class="place-self-center md:px-32">
                <h2 class="pt-0 font-bold">Chaises</h2>
                <p class="leading-7"><span class="underline">Chaises pliantes confortables :</span> Assurez le confort de vos invités tout au long de votre événement. Faciles à installer et à déplacer,
                    elles s'adaptent à toutes les configurations d'espace.</p>
                <p class="pt-6">2€ pièce</p>
                <div class="pt-10">
                    <a href="{{ route('contact.home') }}" class="primary-button">Nous contacter</a>
                </div>
            </div>
            <div>
                <img src="{{ Vite::asset('resources/images/chaise-a-louer.webp') }}"
                     alt="Chaise à louer">
            </div>
        </section>
    </div>

@endsection
