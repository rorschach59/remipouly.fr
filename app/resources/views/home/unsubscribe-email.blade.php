@extends('base')

@section('assets')
@endsection

@section('title', 'POULY Rémi | Gérez vos préférences de communication')
@section('meta-desc', 'Développeur web freelance et webmaster indépendant spécialisé en développement web. Gérez vos préférences de communication')

@section('content')

    <section class="px-12 mt-4 h-screen md:w-1/2 md:mx-auto md:px-0 md:mt-24">
        <h1 class="my-6 text-gray-800 text-3xl font-bold underline leading-[1.5em] tracking-widest md:text-gray-600">Gérez vos préférences de communication</h1>

        @if(session('success'))

            <div class="flex items-center p-4 mb-4 text-gray-500 bg-white rounded-lg shadow">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                    <img src="{{ Vite::asset('resources/images/icone-check.svg') }}"
                         alt="Icone de réussite"
                         width="24" height="24"
                    >
                </div>
                <div class="ml-3 font-normal">
                    <p>
                        Vos préférences ont été mises à jour avec succès.
                        <br>
                        Cette modification sera effective sous 48 heures.
                    </p>
                </div>
            </div>

            <p class="text-xs italic">
                Conformément au RGPD, vous disposez d'un droit d'accès, de rectification et de suppression de vos données personnelles.
                Pour exercer ces droits ou pour toute question sur le traitement de vos données, veuillez me contacter.
            </p>
        @else
            <p class="leading-[2em]">
                Bonjour,
                <br>
                vous avez demandé à gérer vos préférences de communication concernant les emails de Rémi POULY, développeur web.
            </p>

            <form action="{{ route('handle-unsubscribe-email') }}" method="post" class="my-6 text-center md:my-12">
                @csrf
                <input name="contact_id" value="{{ $contactId }}" type="hidden">
                <button type="submit" class="primary-button">
                    Me désinscrire de toutes les communications
                </button>
            </form>
        @endif
    </section>

@endsection
