@extends('base')

@section('title', "Mettre à jour mot de passe")
@section('meta-desc', 'Mettre à jour mot de passe Pitchtonprojet - La plateforme qui aide les entrepreneurs à structurer et présenter leurs idées de manière convaincante. Obtenez des retours constructifs, améliorez vos pitchs et transformez vos projets en succès !')

@section('content')

    <div class="px-4 mt-20 md:px-0">
        <form class="max-w-sm mx-auto" method="post" action="{{ route('forgottenPassword.update') }}">
            @csrf

            @include('partials.form.input', ['labelName' => 'Email', 'name' => 'email', 'type' => 'text', 'value' => old('email')])
            @include('partials.form.input', ['labelName' => 'Mot de passe', 'name' => 'password', 'type' => 'password', 'value' => old('password')])
            @include('partials.form.input', ['labelName' => 'Confirmation du mot de passe', 'name' => 'password_confirmation', 'type' => 'password', 'value' => old('password_confirmation')])
            @include('partials.form.input', ['labelName' => 'Token', 'name' => 'token', 'type' => 'hidden', 'value' => $token])

            <div class="my-2">
                <span class="text-xs italic">Veuillez renseigner l'adresse e-mail avec laquelle vous êtes inscrit afin de recevoir les informations necessaires pour mettre à jour votre mot de passe.</span>
            </div>

            @include('partials.form.button', ['class' => ''])

        </form>
    </div>

@endsection
