@extends('base')

@section('title', "Mot de passe oublié")
@section('meta-desc', 'Mot de passe oublié Pitchtonprojet - La plateforme qui aide les entrepreneurs à structurer et présenter leurs idées de manière convaincante. Obtenez des retours constructifs, améliorez vos pitchs et transformez vos projets en succès !')

@section('content')

    <div class="px-4 mt-20 md:px-0">
        <form class="max-w-sm mx-auto" method="post">
            @csrf

            @if(session()->has('status'))
                @include('partials.notification.success', ['message' => session('status')])
            @endif

            @include('partials.form.input', ['labelName' => 'Email', 'name' => 'email', 'type' => 'email', 'value' => old('email')])

            <div class="my-2">
                <span class="text-xs italic">Veuillez renseigner l'adresse e-mail avec laquelle vous êtes inscrit afin de recevoir les informations necessaires pour mettre à jour votre mot de passe.</span>
            </div>

            @include('partials.form.button', ['class' => ''])

        </form>
    </div>

@endsection
