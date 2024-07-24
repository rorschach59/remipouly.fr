@extends('base')

@section('title', "Inscription")
@section('meta-desc', 'Inscription Pitchtonprojet - La plateforme qui aide les entrepreneurs à structurer et présenter leurs idées de manière convaincante. Obtenez des retours constructifs, améliorez vos pitchs et transformez vos projets en succès !')

@section('assets')
    @vite('resources/js/signup.js')
@endsection()

@section('content')

    <div class="mt-20">
        <div class="text-center mb-20 space-y-4">
            <h1 class="text-2xl">Inscription</h1>
            <a href="{{ route('login') }}"
               class="text-sm text-purple-600 italic font-medium hover:underline block">Déjà un compte ?
            </a>
        </div>

        <form class="px-4 mx-auto md:w-1/2 md:px-0" method="post">
            @csrf

            @if(session()->has('success'))
                @include('partials.notification.success', ['message' => session('success')])
            @endif

            <div class="items-center md:space-x-3 md:flex">
                @include('partials.form.input', ['labelName' => 'Email', 'class' => 'w-full', 'name' => 'email', 'type' => 'email', 'value' => old('email')])
            </div>
            <div class="items-center md:space-x-3 md:flex">
                @include('partials.form.input', ['labelName' => 'Mot de passe', 'class' => 'w-full', 'name' => 'password', 'type' => 'password', 'value' => old('password')])
                @include('partials.form.input', ['labelName' => 'Confirmer le mot de passe', 'class' => 'w-full', 'name' => 'password_confirmation', 'type' => 'password', 'value' => old('password_confirmation')])
            </div>

            <div class="mt-20">
                @include('partials.form.button', ['text' => 'Me connecter', 'class' => 'w-1/2'])
            </div>

        </form>
    </div>

@endsection
